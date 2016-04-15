 <?php
require 'clspermohonan.php';

$form = new permohonan();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action)
{
	default:
        // viewing 
        $form->showForm();
        break; 
	case 'add':
        // adding 
        $form->addForm();
        break;		
	case 'save':
        // saving
        $form->saveForm();
        break;			
	case 'edit':
        // editing
        $form->editForm();
        break;				
	case 'update':
        // updating
        $form->updateForm();
        break;	
	case 'del':
        // deleting
        $form->deleteForm();
        break;	
}
?>