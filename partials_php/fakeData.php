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
//---------------------------------------------ssl-certificates-----------------------------------------//
$ssldata ='[{"id":1000,"ssl":"[DV] Comodo Essential SSL","cname":"dnhost","start":"18/04/2019 11:19","end":"17/07/2020 07:00","state":{"name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ","class":"warning"},"email":"giorgos@dnhost.gr"},{"id":1001,"ssl":"[OV] Thawte SSL Web Server","cname":"dnhost","start":"17/04/2019 16:03","end":"16/07/2020 15:00","state":{"name":"ΛΗΓΜΕΝΟ","class":"danger"},"email":"digitartworks@gmail.com"},{"id":1002,"ssl":"[DV] Thawte SSL123","cname":"dnhost","start":"17/04/2019 15:50","end":"16/07/2020 15:00","state":{"name":"ΛΗΓΜΕΝΟ","class":"danger"},"email":"tsolakidischris@gmail.com"},{"id":1003,"ssl":"[DV] Comodo Essential SSL","cname":"dnhost","start":"18/04/2019 11:19","end":"17/07/2020 07:00","state":{"name":"ΛΗΓΜΕΝΟ","class":"danger"},"email":"giorgos@dnhost.gr"},{"id":1004,"ssl":"[OV] Thawte SSL Web Server","cname":"dnhost","start":"17/04/2019 16:03","end":"16/07/2020 15:00","state":{"name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ","class":"warning"},"email":"digitartworks@gmail.com"},{"id":1005,"ssl":"[DV] Thawte SSL123","cname":"dnhost","start":"17/04/2019 15:50","end":"16/07/2020 15:00","state":{"name":"ΑΚΥΡΩΘΗΚΕ","class":"secondary"},"email":"tsolakidischris@gmail.com"},{"id":1006,"ssl":"[DV] Comodo Essential SSL","cname":"dnhost","start":"18/04/2019 11:19","end":"17/07/2020 07:00","state":{"name":"ΛΗΓΜΕΝΟ","class":"danger"},"email":"giorgos@dnhost.gr"},{"id":1007,"ssl":"[OV] Thawte SSL Web Server","cname":"dnhost","start":"17/04/2019 16:03","end":"16/07/2020 15:00","state":{"name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ","class":"warning"},"email":"digitartworks@gmail.com"},{"id":1008,"ssl":"[DV] Thawte SSL123","cname":"dnhost","start":"17/04/2019 15:50","end":"16/07/2020 15:00","state":{"name":"ΛΗΓΜΕΝΟ","class":"danger"},"email":"tsolakidischris@gmail.com"},{"id":1009,"ssl":"[DV] Comodo Essential SSL","cname":"dnhost","start":"18/04/2019 11:19","end":"17/07/2020 07:00","state":{"name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ","class":"warning"},"email":"giorgos@dnhost.gr"},{"id":1010,"ssl":"[OV] Thawte SSL Web Server","cname":"dnhost","start":"17/04/2019 16:03","end":"16/07/2020 15:00","state":{"name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ","class":"warning"},"email":"digitartworks@gmail.com"},{"id":1011,"ssl":"[DV] Thawte SSL123","cname":"dnhost","start":"17/04/2019 15:50","end":"16/07/2020 15:00","state":{"name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ","class":"warning"},"email":"tsolakidischris@gmail.com"},{"id":1012,"ssl":"[DV] Comodo Essential SSL","cname":"dnhost","start":"18/04/2019 11:19","end":"17/07/2020 07:00","state":{"name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ","class":"warning"},"email":"giorgos@dnhost.gr"},{"id":1013,"ssl":"[OV] Thawte SSL Web Server","cname":"dnhost","start":"17/04/2019 16:03","end":"16/07/2020 15:00","state":{"name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ","class":"warning"},"email":"digitartworks@gmail.com"},{"id":1014,"ssl":"[DV] Thawte SSL123","cname":"dnhost","start":"17/04/2019 15:50","end":"16/07/2020 15:00","state":{"name":"ΕΚΚΡΕΜΕΙ ΕΚΔΟΣΗ","class":"warning"},"email":"tsolakidischris@gmail.com"}]';

$ssldata2 = json_decode($ssldata,true);

$sslnum ='[{"name":"SSL ΠΙΣΤΟΠΟΙΗΤΙΚΑ","num":"1065","img":"sslicon.svg"},{"name":"ΣΕ ΕΚΚΡΕΜΟΤΗΤΑ","num":"332","img":"pending.svg"},{"name":"ΛΗΓΟΥΝ ΣΥΝΤΟΜΑ","num":"6","img":"clock.svg"},{"name":"ΕΧΟΥΝ ΛΗΞΕΙ","num":"138","img":"expired.svg"}]';
$sslnum2 = json_decode($sslnum,true);

//---------------------------------------------ssl-certificates-----------------------------------------//

?>
