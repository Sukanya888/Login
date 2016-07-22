<?php

function login(GtkWindow $wnd, GtkEntry $txtUsername, GtkEntry $txtPassword,GtkEntry

$txtRegNo,GtkEntry $txtDateofBirth,GtkEntry $txtMailID)

{

$strUsername = $txtUsername->get_text();

$strPassword = $txtPassword->get_text();

$strRegNo=$txtRegNo->get_text();

$strDateofBirth=$txtDateofBirth->get_text();

$strMailID=$txtMailID->get_text();

$errors = null;

$strRegNo=="2012506008"&& $strDateofBirth=="22.08.1994"&&

$strMailID=="baluthegreat2@gmail.com")

if($strUsername=="balaji"&& $strPassword=="balaji"&&

{

Gtk::DIALOG_MODAL,Gtk::MESSAGE_INFO, Gtk::BUTTONS_NONE, None);

$dialog = new GtkMessageDialog($wnd,

$dialog->set_markup("RegNo".$strRegNo."\nName:".$strUsername."\nThanks for

Login\n");

Gtk::DIALOG_MODAL,Gtk::MESSAGE_ERROR, Gtk::BUTTONS_OK, $errors);

$dialog->run();

$dialog->destroy();

}

else

{

$dialog = new GtkMessageDialog($wnd,

$dialog->set_markup("Wrong Credidentials\n");

$dialog->run();

$dialog->destroy();

}

}

$wnd = new GtkWindow();

$wnd->set_title('Login');

$wnd->connect_simple('destroy', array('gtk', 'main_quit'));

$lblCredit = new GtkLabel('Welcome to Login page');

$lblRegNo=new GtkLabel('_RegNo',true);

$lblUsername = new GtkLabel('_Username', true);

$lblPassword = new GtkLabel('_Password', true);

$lblDateofBirth=new GtkLabel('_Date of Birth',true);

$lblMailID=new GtkLabel('_Mail ID',true);

$txtRegNo=new GtkEntry();

$txtUsername = new GtkEntry();

$txtPassword = new GtkEntry();

$txtDateofBirth=new GtkEntry();

$txtMailID=new GtkEntry();

$btnLogin = new GtkButton('_Login');

$btnCancel = new GtkButton('_Cancel');

$lblRegNo->set_mnemonic_widget($txtRegNo);

$lblUsername->set_mnemonic_widget($txtUsername);

$lblPassword->set_mnemonic_widget($txtPassword);

$lblDateofBirth->set_mnemonic_widget($txtDateofBirth);

$lblMailID->set_mnemonic_widget($txtMailID);

$btnCancel->connect_simple('clicked', array($wnd, 'destroy'));

$btnLogin->connect_simple('clicked', 'login', $wnd ,$txtUsername,

$txtPassword,$txtRegNo,$txtDateofBirth,$txtMailID);

$tbl = new GtkTable(11, 2);

$tbl->attach($lblCredit, 0, 2, 0, 1);

$tbl->attach($lblRegNo, 0, 1, 1, 2);

$tbl->attach($txtRegNo, 1, 2, 1, 2);

$tbl->attach($lblUsername, 0, 1, 2, 3);

$tbl->attach($txtUsername, 1, 2, 2, 3);

$tbl->attach($lblPassword, 0, 1, 3, 4);

$tbl->attach($txtPassword, 1, 2, 3, 4);

$tbl->attach($lblDateofBirth,0,1,4,5);

$tbl->attach($txtDateofBirth,1,2,4,5);

$tbl->attach($lblMailID,0,1,5,6);

$tbl->attach($txtMailID,1,2,5,6);

$bbox = new GtkHButtonBox();

$bbox->set_layout(Gtk::BUTTONBOX_EDGE);

$bbox->add($btnCancel);

$bbox->add($btnLogin);

$vbox = new GtkVBox();

$vbox->pack_start($tbl);

$vbox->pack_start($bbox);

$wnd->add($vbox);

$wnd->show_all();

Gtk::main();

?>