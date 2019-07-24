<?php
/*
Title : HTML Form Builder Class
Author : Kathiravan
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('class/TextAreaHelper.php');
include('class/TextHelper.php');
include('class/SelectHelper.php');
include('class/RadioHelper.php');
include('class/CheckboxHelper.php');
include('class/DatePickerHelper.php');
/**
 * Class Form
 *
 * Used to building forms
 *
 * @param array contain form elements
 *
 * 
 */
 class Form {

    public $form_number = 1;

   public function __construct($elements){
     $this->elements = $elements;
   }

   /*public function dumpElements() {
     var_dump($this->elements);
   }*/
   
   /**
    * Form class method to build a form from an array
    * 
    * 
    * @return string $output contains the form as HTML
    * 
    */
  function build() {
    $output = '';
    //loop through each element.
	$select2 ='';
	$editor = '';
	foreach ($this->elements as $name => $elements) {
	      switch ($elements['type']) {
		case 'textarea':
		 $editor.=$elements['editor'];
		 $input = TextAreaHelper::TextArea($elements['title'],$elements['editor'],$elements['classname']);
		  break;
		case 'select':
		 $select2.=$elements['select2'];
		  $input =SelectHelper::Select($elements['title'],$elements['type'],$elements['option'],$elements['multiple'],$elements['select2'],$elements['classname']);
		  break;
		 case 'radio':
		  $input =RadioHelper::Radio($elements['title'],$elements['type'],$elements['option'],$elements['classname']);
		  break;
      case 'checkbox':
      $input =CheckboxHelper::Checkbox($elements['title'],$elements['type'],$elements['option'],$elements['classname']);
      break;
      case 'date':
      $input = DatePickerHelper::DatePicker($name,$elements['type'],$elements['classname']);
      break;
   	  default:
		  $input = TextHelper::Text($name,$elements['type'],$elements['classname']);
		  break;
	      }
    $output .=  $input;
    }
	if(!empty($select2)){
		$output .=SelectHelper::enableSelect2Script();

	}    

	if(!empty($editor)){
		$output .=TextAreaHelper::enableEditorScript();

	}    
	
    // Wrap a form around the inputs.
    $output = '
      <form action="' . $_SERVER['PHP_SELF'] . '" method="post">
        <input type="hidden" name="action" value="submit_' . $this->form_number . '" />
        ' . $output . '
      </form>';
    
    // Return the form.
    return $output;
  }

 }
