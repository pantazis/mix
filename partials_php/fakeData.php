<?php 

$menu_cat = '{
  "menucat": [
    {
      "name": "Πίνακας ελέγχου",
      "img":"public/assets/img/nav/control_panel.svg",
      "sub": []
      
    },
    {
      "name": "Domains",
      "img":"public/assets/img/nav/hosting.svg",
      "sub": [
        
    
        {
          "subname": " Πρόσωπα επαφής"
        },
        {
          "subname": " Αιτήσεις μεταβίβασης"
        }
      ]
    },
    {
      "name": "Hosting",
      "img":"public/assets/img/nav/domains.svg",
      "sub": [
        
     
        {
          "subname": " Λογαριασμoί hosting"
        },
        {
          "subname": " Dedicated Hosting Plans"
        },
        {
          "subname": " Attributes"
        },
        {
          "subname": " Options"
        },
        {
          "subname": " Extensions"
        }
      ]
    },
    {
      "name": "SSL",
      "img":"public/assets/img/nav/ssl.svg",
      "sub": [
       
    
        {
          "subname": " Υπηρεσίες εγκατάστασης"
        }
      ]
    },
    {
      "name": "Χρήστες",
      "img":"public/assets/img/nav/users.svg",
      "sub": []
    },
    {
      "name": "Οικονομικά",
      "img":"public/assets/img/nav/euro.svg",
      "sub": [
        
      
        {
          "subname": " Προφίλ τιμολόγησης"
        },
        {
          "subname": " Παραγγελίες"
        },
        {
          "subname": " Ιστορικό κινήσεων"
        },
        {
          "subname": " Κωδικοί πληρωμής"
        }
      ]
    },
    {
      "name": "Προϊόντα",
      "img":"public/assets/img/nav/product.svg",
      "sub": [
        
     
        {
          "subname": " Ιστορικό προϊόντων"
        },
        {
          "subname": " Κωδικοι προϊόντων"
        }
      ]
    }
  ]
}';

$menu_cat2 = json_decode($menu_cat,true);

/*fa-user
fa-shopping-cart
fa-question-circle*/
