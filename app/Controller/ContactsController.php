<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ContactsController extends AppController {
    public function contact() {
        $this -> layout = null;
  if ($this->request->is('ajax')) {
    // Use data from serialized form
    // print_r($this->request->data['Contacts']); // name, email, message
    $this->render('contact-ajax-response', 'ajax'); // Render the contact-ajax-response view in the ajax layout
  }
}
}
