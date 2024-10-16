<?php 

class MainController {

    public static function home()
    {
        include_once './Views/welcome.php';
    }
    public static function login()
    {
        include_once './Views/login.php';
    }

    public static function loginStore()
    {
        $customerModel = new Model('customers');

        if( $_SERVER['REQUEST_METHOD'] == 'POST') {

            $email = $_POST['email'];
            $password = $_POST['password'];

            if(!($email && $password)) {
                $_SESSION['error'] = 'Email & Password are required !';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']); // return back
                exit();
            }

            $user = $customerModel->first('email', $email);
            if($user) {
                if(password_verify($password, $user['password'])) {
                    setcookie('mindset_user',  json_encode($user), time() + (24 * 60 * 60));
                    $_SESSION['success'] = 'Login successfully!';
                    header('location: ../classes');
                    exit();
                } else {
                    $_SESSION['error'] = 'Password is invalid !';
                    header('Location: ' . $_SERVER['HTTP_REFERER']); // return back
                    exit();
                }
            } else {
                $_SESSION['error'] = 'Email is invalid !';
                header('Location: ' . $_SERVER['HTTP_REFERER']); // return back
                exit();
            }
        }
    }

    public static function register()
    {
        $countryModel = new Model('countries');

        $countries = $countryModel->all();

        include_once './Views/register.php';
    }

    public static function registerStore()
    {
        
        $customerModel = new Model('customers');

        if( $_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password =password_hash( $_POST['password'], PASSWORD_DEFAULT);
            $country = $_POST['country'];


            if(!$name) {
                $_SESSION['error'] = 'Please enter your name!';
                header('location: ../register');
                exit();
            }

            if(!$email) {
                $_SESSION['error'] = 'Please enter your email!';
                header('location: ../register');
                exit();
            }
            
            if(! (  str_contains($email, '@') && str_contains($email, '.')  )) {
                $_SESSION['error'] = 'Please enter a real email !';
                header('location: ../register');
                exit();
            }


            if(!$password) {
                $_SESSION['error'] = 'Please enter your password!';
                header('location: ../register');
                exit();
            }


            $data = [
                'name' => $name, 
                'email' => $email , 
                'country' => $country, 
                // 'password' => $password
            ];

            if(!empty($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
                $imgTem = $_FILES['image']['tmp_name'];
                $imgName = $_FILES['image']['name'];
                
                $nameArr = explode( '.' , $imgName);
            
                $ext = end($nameArr);
            
                $data['profile'] = './Views/images/' . time() . '.' . $ext;
            
                move_uploaded_file($imgTem, $data['profile']);
            }
            
            if($customerModel->create($data)) {

                unset($data['password']);

                setcookie('mindset_user',  json_encode($data), time() + (24 * 60 * 60));
                
                $_SESSION['success'] = 'Registered successfully!';

                header('location: ../classes');
                
                exit();
            } 

        }
    }
    
    
    public static function create(){
        include_once "./Views/create_classes.php";
    }

    public static function createstore(){
        require_once "./FileManager.php";
        $classModel = new Model('classes');
        $fileManager = new FileManager();

        if( $_SERVER['REQUEST_METHOD'] == 'POST') {

            $className = $_POST['name'];

            if(!$className) {
                $_SESSION['error'] = 'Please enter class name!';
                header('location: ../create_classes');
                exit();
            }

            $data = ['name' => $className];

            if(!empty($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
                $data['image_url'] = $fileManager->upload($_FILES['image']);
            }

            if($classModel->create($data)) {
                $_SESSION['success'] = 'Class Added successfully!';
                header('location: ../classes');
                exit();
            } 
        }
    }

    public static function updateclass(){
        require_once "./Views/update_class.php";
    }

    public static function updatestore(){

    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $className = $_POST['name'];

        // TEM -> YOUR FILES -> rename -> moving
        // todo :: get last image for class

        $newPath = '';

        // Database connection (Make sure $pdo is your PDO instance)
        $pdo = new PDO('mysql:host=localhost;dbname=mindset', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if file was uploaded
        if (!empty($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {

            // Fetch the current image URL
            $stmt = $pdo->prepare("SELECT image_url FROM classes WHERE id = :id LIMIT 1");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // If the image exists, delete it
            if ($result && file_exists($result['image_url'])) {
                unlink($result['image_url']);
            }

            // Prepare new image path
            $imgTem = $_FILES['image']['tmp_name'];
            $imgName = $_FILES['image']['name'];
            $nameArr = explode('.', $imgName);
            $ext = end($nameArr);
            $newPath = '../Views/images' . time() . '.' . $ext;

            // Move the uploaded file to the new path
            move_uploaded_file($imgTem, $newPath);
        }

        // Prepare the update query
        if ($newPath) {
            $updateQuery = "UPDATE classes SET name = :className, image_url = :newPath WHERE id = :id";
        } else {
            $updateQuery = "UPDATE classes SET name = :className WHERE id = :id";
        }

        // Execute the update query
        $stmt = $pdo->prepare($updateQuery);
        $stmt->bindParam(':className', $className, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($newPath) {
            $stmt->bindParam(':newPath', $newPath, PDO::PARAM_STR);
        }

        $query = $stmt->execute();


        // If update is successful
        if ($query) {
            $_SESSION['success'] = 'Class Updated successfully!';
            header('Location: ../classes');
            exit();
        }

        // Close connection (optional, PDO closes automatically)
        $pdo = null;
    }
    
    }


    public static function delete(){
    require_once "./FileManager.php";
    $classModel = new Model('classes');
    $fileManager = new FileManager();

    $class = $classModel->first('id', $_GET['id']);

    if(file_exists($class['image_url']))  $fileManager->remove($class['image_url']);

    if($classModel->delete($_GET['id'])) {
        $_SESSION['success'] = 'Class deleted successfully!';
        header('location: ../');
    } 
    }

    public static function classes()
    {

        $classModel = new Model('classes');

        $classes = $classModel->all();

        include_once './Views/classes.php';
    }

    public static function logout()
    {
        
        setcookie('mindset_user', '', time() - (24 * 60 * 60));


        header('location: ../');

    }

}