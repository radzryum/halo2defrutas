<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<link rel="stylesheet" type="text/css" href="../html5/css/styles4.css">
	<script src="https://kit.fontawesome.com/d5327027d1.js" crossorigin="anonymous"></script>
    <script language=javascript>

        function halo()
        {
            var customer1=frmhalo.txtfname.value;
            var customer2=frmhalo.txtlname.value;
            var address=frmhalo.txtAddress.value;
            var mail=frmhalo.txtEmail.value;
            var num=frmhalo.txtNumber.value;

        if(frmhalo.txtfname.value=="")
        {
          alert("Check the First Name");
          System.exit(0);
        }
        else if(frmhalo.txtlname.value=="")
        {
            alert("Check the Last Name");
          System.exit(0);
        }
        else if(frmhalo.txtAddress.value=="")
        {
            alert("Check the Address");
          System.exit(0);
        }
        else if(frmhalo.txtEmail.value=="")
        {
            alert("Check the Email");
          System.exit(0);
        }
        else if(frmhalo.txtNumber.value=="")
        {
            alert("Check the Contact Number");
          System.exit(0);
        }
     else{

    




         var arteReg=frmhalo.txtArteReg.value;
         var arteGran=frmhalo.txtArteGran.value;
         var bingsuReg=frmhalo.txtBingsuReg.value;
         var bingsuGran=frmhalo.txtBingsuGran.value;
         var suikaReg=frmhalo.txtSuikaReg.value;
         var suikaGran=frmhalo.txtSuikaGran.value;
         var floatReg= frmhalo.txtFloatReg.value;
         var floatGran=frmhalo.txtFloatGran.value;
        var maizReg=frmhalo.txtMaizReg.value;
        var maizGran=frmhalo.txtMaizGran.value;
       var chocoReg=frmhalo.txtChocoReg.value;
       var chocoGran=frmhalo.txtChocoGran.value;
       var pandanReg=frmhalo.txtPandanReg.value;
       var pandanGran=frmhalo.txtPandanGran.value;
       var ubeReg=frmhalo.txtUbeReg.value;
       var ubeGran=frmhalo.txtUbeGran.value;                                     



            
            
         var timesArteReg=frmhalo.txtQtyArteReg.value;
         var timesArteGran=frmhalo.txtQtyArteGran.value;
         var timesBingsuReg=frmhalo.txtQtyBingsuReg.value;
         var timesBingsuGran=frmhalo.txtQtyBingsuGran.value;
         var timesSuikaReg=frmhalo.txtQtySuikaReg.value;
         var timesSuikaGran=frmhalo.txtQtySuikaGran.value;
         var timesFloatReg=frmhalo.txtQtyFloatReg.value;
         var timesFloatGran=frmhalo.txtQtyFloatGran.value;
         var timesMaizReg=frmhalo.txtQtyMaizReg.value;
         var timesMaizGran=frmhalo.txtQtyMaizGran.value;
        var timesChocoReg=frmhalo.txtQtyChocoReg.value;
        var timesChocoGran=frmhalo.txtQtyChocoGran.value;
        var timesPandanReg=frmhalo.txtQtyPandanReg.value;
        var timesPandanGran=frmhalo.txtQtyPandanGran.value;
        var timesUbeReg=frmhalo.txtQtyUbeReg.value;
        var timesUbeGran=frmhalo.txtQtyUbeGran.value;


       /*Multiply*/
         var totalArteReg= parseFloat(arteReg) * parseFloat(timesArteReg);
         var totalArteGran= parseFloat(arteGran) * parseFloat(timesArteGran);
         var totalBingsuReg= parseFloat(bingsuReg) * parseFloat(timesBingsuReg);
         var totalBingsuGran=parseFloat(bingsuGran) * parseFloat(timesBingsuGran);
         var totalSuikaReg= parseFloat(suikaReg) * parseFloat(timesSuikaReg);
         var totalSuikaGran= parseFloat(suikaGran) * parseFloat(timesSuikaGran);
         var totalFloatReg= parseFloat(floatReg) * parseFloat(timesFloatReg);
         var totalFloatGran= parseFloat(floatGran) * parseFloat(timesFloatGran);
         var totalMaizReg= parseFloat (maizReg) * parseFloat(timesMaizReg);
         var totalMaizGran= parseFloat(maizGran) * parseFloat(timesMaizGran);
         var totalChocoReg=parseFloat(chocoReg) * parseFloat(timesChocoReg);
         var totalChocoGran=parseFloat(chocoGran) * parseFloat(timesChocoGran);
         var totalPandanReg=parseFloat(pandanReg) * parseFloat(timesPandanReg);
         var totalPandanGran= parseFloat(pandanGran) * parseFloat(timesPandanGran);
         var totalUbeReg= parseFloat(ubeReg) * parseFloat(timesUbeReg);
         var totalUbeGran= parseFloat(ubeGran) * parseFloat(timesUbeGran);
   
         




         /*Overall Total*/
         var total=totalArteReg + totalArteGran + totalBingsuReg + totalBingsuGran + totalSuikaReg + totalSuikaGran + 
         totalFloatReg + totalFloatGran + totalMaizReg + totalMaizGran + totalChocoReg + totalChocoGran + totalPandanReg + totalPandanGran + totalUbeReg +totalUbeGran;
        

        /*delivery time*/
         const d = new Date();
        d.setMinutes(d.getMinutes() + 30);;
        d.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true })
        var today = new Date();
        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();

        document.write("<center><h1><font color=green face=WildWest size=10> Halo-Halo de Frutas</font></h1>");
        document.write("<br><center><h2><font color=green>Customer Official Receipt</h2>");
        document.write("<font size=8 >------------------------------</font>");
        document.write("<font size= 5><br>Customer Name:" + customer1);
        document.write("<br><br>Customer Email:" + mail);
        document.write("<br><br>Address:" + address);
        document.write("<br><br>Phone:" + num);
        document.write("<br><br>Total Amount : ??? ");
        document.write(total);
        document.write("<br><br>Shipping Fee : ???60.00");
        document.write('<br><br> Expected Delivery Time: <br>' + date +" || " +  d.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true }));
        document.write("<br><br>Thank you for your order Mr./Ms." + customer2 + " ^-^");
        document.write("<em><br>If you have any questions about your order, Contact with us anytime <br> We'd love to hear from you!");
     }

        }

    </script>
</head>
<body>
    <div class="pamagat">
        <img src="img/Title.png">
    </div>
    <div class="main">
    <form name=frmhalo>
        <table class="una" width=1900 border=0>
            <tr>
                <th colspan=3 class="titleProd"><h1>Products
                                                  </h1><center></th>
                
            </tr>
            <tr>
                <td colspan=3 class="paragraph"><p><center>All of a the products is made to order.<br>
                    Please keep in mind that there will be a small difference from the picture.<br>
                We provide a form at the right side of the page once you place an order.</center></p></td>
            </tr>
            <!-- Product set 1-->
            <tr>
                <td width=600><center><img  class="foto" width="90%" src="../html5/img/prod1.jpg"></center></td>
                <td width=600><center><img  class="foto" width="90%" src="../html5/img/prod3.jpg"></center></td>
                <td width=600><center><img  class="foto" width="90%" src="../html5/img/prod2.jpg"></center></td>
            </tr>
            <tr>
            <td width=600 class="prodName"><center><h3>LA Arte Halo-Halo</h3></center></td>
            <td width=600 class="prodName"><center><h3>Mango Bingsu Halo-Halo</h3></center></td>
            <td width=600 class="prodName"><center><h3>Suika Halo-Halo</h3></center></td>
           </tr>
           <tr>
               
               <td width=600 class="prodDesc"><center><p class="pdesign">A traditional layered dessert consisting of sweetened
                 beans, icefresh fruits, shaved drizzled with evaporated milk, and ice cream.</p></center></td>
                 <td width=600 class="prodDesc"><center><p  class="pdesign">A traditional dessert in Korea, Bingsu is probably the
                      most sought summer dessert in East Asia. It typically consists of chopped fruit, condensed milk, 
                      strawberries, kiwi fruit, small pieces of tteok (rice cake) and etc.</p></center></td>
                    <td width=600 class="prodDesc"><center><p  class="pdesign">This includes ???Melon,??? ???fruit annin??? (Chinese jelly).
                         ???kuromitsu kinako??? (Japanese black syrup and roasted soybean flour), ???mitarashi dango,??? (traditional Japanese
                          sweet) and a red syrup that is usually made from pomegranates.</p></center></td>
           </tr>
           <tr class="purchase">
               <td class="purchase"><center><input type="checkbox" onclick=txtArteReg.value=59>&nbspRegular(16oz) - ???59.00
                <input type=hidden name=txtArteReg size=5 value=0> &nbsp&nbsp&nbsp&nbspQty:
                <input type=text class="input-qty" size=1 name=txtQtyArteReg  value="  0" >
                
           <br><br><input type="checkbox" onclick=txtArteGran.value=69>&nbspGrande(22oz) - ???69.00
           <input type=hidden name=txtArteGran size=5 value=0> &nbsp&nbsp&nbsp &nbspQty:
           <input type=text class="input-qty" value="  0" size=1 name=txtQtyArteGran>
           </center></td>
               <td class="purchase"><center><input type="checkbox" onclick=txtBingsuReg.value=65>&nbspRegular(16oz) - ???65.00
                <input type=hidden name=txtBingsuReg size=5 value=0> &nbsp&nbsp&nbsp&nbspQty:
                <input type=text class="input-qty" value="  0" size=1 name=txtQtyBingsuReg>
                
            <br><br><input type="checkbox" onclick=txtBingsuGran.value=80>&nbspGrande(22oz) - ???80.00
            <input type=hidden name=txtBingsuGran size=5 value=0> &nbsp&nbsp&nbsp &nbspQty:
            <input type=text class="input-qty" value="  0" size=1 name=txtQtyBingsuGran>
            </center></td>
               <td class="purchase"><center><input type="checkbox" onclick=txtSuikaReg.value=59>&nbspRegular(16oz) - ???59.00
                <input type=hidden name=txtSuikaReg size=5 value=0> &nbsp&nbsp&nbsp&nbspQty:
                <input type=text class="input-qty" value="  0" size=1 name=txtQtySuikaReg>
                
            <br><br><input type="checkbox" onclick=txtSuikaGran.value=69>&nbspGrande(22oz) - ???69.00
            <input type=hidden name=txtSuikaGran size=5 value=0> &nbsp&nbsp&nbsp &nbspQty:
            <input type=text class="input-qty" value="  0" size=1 name=txtQtySuikaGran>
            </center></td>

           </tr>
            <!-- Product set 2-->
            <tr>
                <td width=600><center><img  class="foto" width="90%" src="../html5/img/prod4.jpg"></center></td>
                <td width=600><center><img  class="foto" width="90%" src="../html5/img/prod5.jpg"></center></td>
                <td width=600><center><img  class="foto" width="90%" src="../html5/img/prod6.jpg"></center></td>
            </tr>
            <tr>
            <td width=600 class="prodName"><center><h3>Graham Float Halo-Halo</h3></center></td>
            <td width=600 class="prodName"><center><h3>Maiz Con Hielo</h3></center></td>
            <td width=600 class="prodName"><center><h3>Dark Choco Halo-Halo</h3></center></td>
           </tr>
           <tr>
               <td width=600 class="prodDesc"><center><p class="pdesign">Halo-Halo Graham Float is a new variation of Filipino's
                    favorite summer dessert. Instead of adding shaved ice, I used whipped cream and graham cracker.</p></center></td>
                 <td width=600 class="prodDesc"><center><p class="pdesign">One of the most common traditional dessert in the Philippines is Maiz Con Hielo, 
                     it consist of  crushed ice layered with corn kernels and sweetened milk.</p></center></td>
                    <td width=600 class="prodDesc"><center><p class="pdesign">The Dark Choco Halo-Halo which has chunks of brownies, chocolate fudge, cashews
                         to give it a bit of crunch, toasted marshmallows, and oreo cookies.</p></center></td>
           </tr>
           <tr >
               <td class="purchase"><center><input type="checkbox" onclick=txtFloatReg.value=50>&nbspRegular(16oz) - ???50.00
                <input type=hidden name=txtFloatReg size=5 value=0> &nbsp&nbsp&nbsp&nbspQty:
                <input type=text class="input-qty" value="  0" size=1 name=txtQtyFloatReg>
                
           <br><br><input type="checkbox" onclick=txtFloatGran.value=69>&nbspGrande(22oz) - ???69.00
           <input type=hidden name=txtFloatGran size=5 value=0> &nbsp&nbsp&nbsp &nbspQty:
           <input type=text class="input-qty" value="  0" size=1 name=txtQtyFloatGran>
          </center></td>
               <td class="purchase"><center><input type="checkbox" onclick=txtMaizReg.value=49>&nbspRegular(16oz) - ???49.00
                <input type=hidden name=txtMaizReg size=5 value=0> &nbsp&nbsp&nbsp&nbspQty:
                <input type=text class="input-qty" value="  0" size=1 name=txtQtyMaizReg>
                
            <br><br><input type="checkbox" onclick=txtMaizGran.value=59>&nbspGrande(22oz) - ???59.00
            <input type=hidden name=txtMaizGran size=5 value=0> &nbsp&nbsp&nbsp &nbspQty:
            <input type=text class="input-qty" value="  0" size=1 name=txtQtyMaizGran>
            </center></td>
               <td class="purchase"><center><input type="checkbox" onclick=txtChocoReg.value=69>&nbspRegular(16oz) - ???69.00
                <input type=hidden name=txtChocoReg size=5 value=0> &nbsp&nbsp&nbsp&nbspQty:
                <input type=text class="input-qty" value="  0" size=1 name=txtQtyChocoReg>
                
            <br><br><input type="checkbox" onclick=txtChocoGran.value=79>&nbspGrande(22oz) - ???79.00
            <input type=hidden name=txtChocoGran size=5 value=0>
             &nbsp&nbsp&nbsp&nbspQty:   <input type=text class="input-qty" value="  0" size=1 name=txtQtyChocoGran>
            </center></td>

           </tr>
           <!-- Product set 3-->
           
           <tr class="row3">
            <td width=600><center><img  class="foto" width="90%" src="../html5/img/prod7.jpg"></center></td>
            <td width=600><center><img  class="foto" width="90%" src="../html5/img/prod8.jpg"></center></td>
        </tr>
        <tr class="row3">
        <td width=600 class="prodName"><center><h3>Buko Pandan Halo-Halo</h3></center></td>
        <td width=600 class="prodName"><center><h3>Oh! Beh Halo-Halo</h3></center></td>
       </tr>
       <tr class="row3">
           <td width=600 class="prodDesc"><center><p class="pdesign">It's made with finely shaved ice milk, topped with buko pandan jelly, 
               macapuno, a scoop of macapuno ice cream, and then drizzled with buko pandan syrup.</p></center></td>
             <td width=600 class="prodDesc"><center><p class="pdesign">Oh beh! is consist of ube halo-halo with nata de coco, fresh buko shreds, ube
                  gelatin, tapioca pearls, rice crisps, and the final touch, a scoop of ube ice cream.</p></center></td>
       </tr>
       <tr class="row3">
           <td class="purchase"><center><input type="checkbox" onclick=txtPandanReg.value=59>&nbspRegular(16oz) - ???59.00
            <input type=hidden name=txtPandanReg size=5 value=0> &nbsp&nbsp&nbsp&nbspQty:
            <input type=text class="input-qty" value="  0" size=1 name=txtQtyPandanReg>
            
       <br><br><input type="checkbox" onclick=txtPandanGran.value=69>&nbspGrande(22oz) - ???69.00
       <input type=hidden name=txtPandanGran size=5 value=0> &nbsp&nbsp&nbsp&nbspQty:
       <input type=text class="input-qty" value="  0" size=1 name=txtQtyPandanGran>
       </center></td>
           <td class="purchase"><center><input type="checkbox" onclick=txtUbeReg.value=59>&nbspRegular(16oz) - ???59.00
            <input type=hidden name=txtUbeReg size=5 value=0> &nbsp&nbsp&nbsp&nbspQty:
            <input type=text class="input-qty" value="  0" size=1 name=txtQtyUbeReg>
            
        <br><br><input type="checkbox" onclick=txtUbeGran.value=69>&nbspGrande(22oz) - ???69.00
        <input type=hidden name=txtUbeGran size=5 value=0> &nbsp&nbsp&nbsp&nbspQty:
        <input type=text class="input-qty" value="  0" size=1 name=txtQtyUbeGran>
        </center></td>
       </tr>
      </table> <br><br>
        <div class="checkout">
            <table>
                <table width=480 border=0>
                    <tr class="regbuy"><th colspan=2><h1>&nbsp&nbspREGISTER AND BUY</h1></th>
                    </tr>
                    <tr><td><p>First Name:</p></td>
                    <td><div class="icons"><input type=text size=40 class="input-field" name=txtfname></div></td>
                    </tr>
                    <tr><td><p>Last Name:</p></td>
                    <td><div class="icons"><input type=text size=40 class="input-field" name=txtlname></div></td>
                    </tr>
                    <tr><td><p>Address:</p></td>
                        <td><div class="icons"><input type=text class="input-field" size=40 name=txtAddress></div></td>
                        </tr>
                        <tr><td><p> Email:</p></td>
                            <td><div class="icons"><input type=text class="input-field" size=40 name=txtEmail></div></td>
                            </tr>
                            <tr><td><p>Contact Number:</p></td>
                                <td><div class="icons"><input type=text class="input-field" size=40 name=txtNumber></div></td>
                                </tr>
                    <tr><td colspan=2 align=center>
                   <div class="agree"><input type="checkbox" ><a  style="text-decoration:none;" href="../html2/policy.html"> Agree to the Terms and Conditions.</a></div><br>
                    <input type=button class="btn" value="Place Order" onclick= halo()>&nbsp&nbsp&nbsp
                    <input type=reset class="btn" value=Reset>

                    
                    </td>
                    
                    </tr>
                    </table>
            </table>
            
        </div>
    </form>
</div>

    <nav>
        <div class="logo">
        <bgcolor=#909721>
            <img src="img/logo.png">
        </div>
        <ul class="head">
            
            <li ><a href="../index.html"><i class="fas fa-home"></i>&nbsp HOME </a></li>
            <li ><a href="../html/about.html"><i class= "fas fa-question-circle"></i>&nbsp ABOUT</a></li>
            <li  class="active"><a href="#"><i class="fas fa-ice-cream"></i>&nbsp PRODUCT  </a></li>
            <li ><a href="../html3/contact.html"><i class="fas fa-id-card"></i>&nbsp CONTACT  </a></li>
            <li ><a href="../html4/FAQS.html"><i class="fas fa-comment-dots"></i>&nbsp FAQS </a></li></bgcolor>
        </ul>
    </nav>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>