<?php
class loanController {
	public function __construct()
	{
		
	}

		public function view()
	{
      	session_start();
        include('models/memberModel.php');    
        include('models/itemModel.php');
            
        $submitSuccess = false;
		$submitError = false;
            
        $username = $_SESSION['username'];    
        $itemModel = new itemModel();
                        
        if(isset($_POST["submit"])) {
            $item_name = $_POST['itemName'];
            $owner = $username;
            $category = $_POST['category'];
            $price = $_POST['price'];
            $description = $_POST['item_info'];
            $location = $_POST['location'];
            $date_start = explode("/" , $_POST['start']);
            $date_end = explode("/", $_POST['end']);
                
            $date_start_string = $date_start[1] . "/" . $date_start[0] . "/" . $date_start[2];
            $date_end_string = $date_end[1] . "/" . $date_end[0] . "/" . $date_end[2];
            
            $result = $itemModel->addLoan($item_name, $owner, $category, $price, $description, $location);
            $dateResult = $itemModel->addAvailableDates($item_name, $owner, $date_start_string, $date_end_string);
            $uploadImage = new imageController();
            $uploadImage-> uploadCoverPhoto($item_name, $owner);
                
                if (!$result) {
                   // $loanCreationError = true;
                    $submitError = true;
                    $loanCreationErrorMessage = "<p class=\"text-danger\">Loan Creation Failed! Please contact admin.</p>";
                }
            
                if (!$dateResult) {
                    $submitError = true;
                    $dateErrorMessage = "<p class=\"text-danger\">Date Failed! Please contact admin.</p>";
                }
            
                if ($result) {    
				    $submitSuccess = true;
				} 
                else {
                    $submitError = true;
                }
                    
        }    



		// load view
		include('views/loan.php');
	}
}
?>