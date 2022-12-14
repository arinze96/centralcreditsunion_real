<?php
	require_once "../controllers/Controllers.php";
	require_once "../controllers/FormControl.php";
	//Intstantiate the Generic class
	global $_color;
	$cookie		    = explode(",", $_COOKIE["siteData"]);
	$generic 			= new Generic($cookie[1]);
	$get    			= (object)$_GET;
	$uri					= $generic->getURIdata();
  $uri->root    = absolute_filepath("{$uri->backend}");
	//Pass the generic object into the paramController
	$paramControl = new ParamControl($generic);
  $params    		= $paramControl->get_params();
	$param 				= $params->{$get->pageType};
	$formdata			= $paramControl->extract_form($param->form);
	$formControl	= new FormControl($uri);
	$pageId				= strToFilename($get->pageType);
	// see($pageId);
	$param->default_view = empty($param->default_view) ? "list" : $param->default_view;
	$param->form->form_view = empty($param->form->form_view) ? "swipe" : $param->form->form_view;
	$form_views = ["swipe", "modal", "extension"];
	//Default fixed action buttons on the list view
	$default_list_actions = [
		"add"=>["Add new","new","green"],
		"refresh"=>["Refresh","reloadPage","orange"],
		"delete"=>["Delete from","_multiDelete","red"],
	];
	// Default fixed action buttons on the form view
	$default_form_actions = [
		"back"=>["Go Back to","close"],
		"clear"=>["Refresh","formReset"],
		"submit"=>["Submit Form",""],
		"print"=>["Print","printForm"],
	];
	$_color   = array("green","red","blue","cyan darken-3","teal darken-4","orange","light-green darken-3","lime darken-1","pink darken-4","purple darken-4", "purple accent-4");
	shuffle($_color);
	if(!empty($get->ajax)) { ?>
		<!DOCTYPE html>
		<html>
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<title><?=$param->page_title ?></title>
				<?php $company = $generic->company(); ?>
				<!-- Include default CSS files-->
				<?php require_once("{$uri->root}includes/link_css.php") ?>
				<!-- Include custom CSS files-->
				<?php require_once("{$uri->root}backendProject/link_css.php") ?>
			</head>
			<body>
				<div style="height:2rem;display:block">
					<div class="progress hide">
						<div class="indeterminate"></div>
					</div>
				</div>
			<?php } ?>
      <div class="house" id="_<?=$pageId?>" default-view="<?=$param->default_view?>">
        <?php require_once("{$uri->root}includes/form_container.php") ?>
        <?php require_once("{$uri->root}includes/list_container.php") ?>
      </div>
    <?php if(!empty($get->ajax)) { ?>
		</body>
  </html>
<?php } ?>
