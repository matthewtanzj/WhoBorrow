<?php
class SearchController {
	public function __construct()
	{
		
	}

	public function view()
	{
		session_start();

		include('models/searchModel.php');
		$searchModel = new searchModel();

		$itemArray = false;
		$search = '';
		


		if (!empty($_POST)) {
			
			if ($_POST['action'] == 'search' && !empty($_POST['search'])) {
				$result = $searchModel->searchByItemName($_POST['search']);
				$itemArray = pg_fetch_all($result);
			}

			if ($_POST['action'] == 'searchForItem' && !empty($_POST['item'])) {
				$unavailable_item = empty($_POST['unavailable_item'])? '' : $_POST['unavailable_item'];

				$result = $searchModel->advanceSearchForItem($_POST['item'], $_POST['owner'], $_POST['category'], $_POST['price_start'], $_POST['price_end'], $_POST['location'], $_POST['date_start'], $_POST['date_end'], $unavailable_item);
				$itemArray = pg_fetch_all($result);
			}

		}


		include('views/search.php');

	}
}