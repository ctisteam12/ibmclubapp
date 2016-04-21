    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title></title>
      <style type="text/css">
      body {
       padding-top: 0 !important;
       padding-bottom: 0 !important;
       padding-top: 0 !important;
       padding-bottom: 0 !important;
       margin:0 !important;
       width: 100% !important;
       -webkit-text-size-adjust: 100% !important;
       -ms-text-size-adjust: 100% !important;
       -webkit-font-smoothing: antialiased !important;
     }
     .tableContent img {
       border: 0 !important;
       display: block !important;
       outline: none !important;
     }
     a{
      color:#382F2E;
    }

    p, h1{
      color:#382F2E;
      margin:0;
    }
 p{
      text-align:left;
      color:#999999;
      font-size:14px;
      font-weight:normal;
      line-height:19px;
    }

    a.link1{
      color:#382F2E;
    }
    a.link2{
      font-size:16px;
      text-decoration:none;
      color:#ffffff;
    }

    h2{
      text-align:left;
       color:#222222; 
       font-size:19px;
      font-weight:normal;
    }
    div,p,ul,h1{
      margin:0;
    }

    .bgBody{
      background: #ffffff;
    }
    .bgItem{
      background: #ffffff;
    }

    </style>
<script type="colorScheme" class="swatch active">
{
    "name":"Default",
    "bgBody":"ffffff",
    "link":"382F2E",
    "color":"999999",
    "bgItem":"ffffff",
    "title":"222222"
}
</script>
  </head>
  <body paddingwidth="0" paddingheight="0"  style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent bgBody" align="center"  style='font-family:Helvetica, Arial,serif;'>

      
      <tr><td height='35'></td></tr>

      <tr>
        <td>
          <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class='bgItem'>
            <tr>
              <td width='40'></td>
              <td width='520'>
                <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">

<!-- =============================== Header ====================================== -->           
                  

                  <tr><td height='75'></td></tr>
<!-- =============================== Body ====================================== -->

                  <tr>
                    <td class='movableContentContainer' valign='top'>
             <div lass='movableContent'>
                        <table width="520" border="0" cellspacing="10" cellpadding="10" align="center">
                          <tr>
                            <td valign='top' align='center'>
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable">
                                  <?php foreach ($events as $key) {
                                      $event_name = $key->event_name;
                                      $event_date = $key->event_date;
                                      $event_place = $key->event_place;
                                      $event_description = $key->event_description;
                                  } ?>
                                  <p style='text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size:26px;color:#222222;'><?php echo $event_name; ?></p>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>

                      <div class='movableContent'>
                        <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr><td height='55'></td></tr>
                          <tr>
                            <td align='left'>
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align='center'>
                                  <?php foreach ($members as $key) {
                                      $member_name = $key->name;
                                      $member_surname = $key->surname;
                                  } ?>
                                  <h2 ><?php echo "Sayın ".$member_name." ".$member_surname; ?></h2>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height='15'> </td></tr>

                          <tr>
                            <td align='left'>
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align='center'>
                                  <p  style='text-align:left;color:black;font-size:14px;font-weight:normal;line-height:19px;'>
                <span style="color:blue; font-weight:bold;"><?php echo $event_name." "; ?></span>etkinliğine katıldınız.<br><br>
                Etkinlik bilgileri aşağıdadır;
                                    <br>
                                    <br>
                                    <span style="color:blue; font-weight:bold;">Etkinlik İsmi:</span> <?php echo $event_name; ?><br>
                  <span style="color:blue; font-weight:bold;">Etkinlik Tarihi:</span><?php echo $event_date; ?><br>
                  <span style="color:blue; font-weight:bold;">Etkinlik Yeri:</span><?php echo $event_place; ?><br>
                  <span style="color:blue; font-weight:bold;">Etkinlik Açıklaması:</span><?php echo $event_description; ?>
                                    <br><br>
                  IBM CLUB olarak etkinlikte güzel vakit geçirmenizi dileriz :)
                                    <br><br>
                                    Sevgilerimizle,
                                    <br><br>
                                    <span style='color:#222222;'>IBM CLUB Ekibi</span>
                                  </p>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height='55'></td></tr>

                          <tr>
                            <td align='center'>
                              <table>
                                <tr>
                                  <td align='center' bgcolor='#DC2828' style='background:#DC2828; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;'>
                                    <div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable" align='center'>
                                        <a target='_blank' href='http://ibmclubapp.eu-gb.mybluemix.net/' class='link2' style='color:#ffffff;'>IBM CLUB Giriş Yap</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr><td height='20'></td></tr>
                        </table>
                      </div>

                      <div lass='movableContent'>
                        <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr><td height='65'></td></tr>
                          <tr><td  style='border-bottom:1px solid #DDDDDD;'></td></tr>

                          <tr><td height='25'></td></tr>

                          <tr>
                            <td>
                              <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
                                <tr>
                                  <td valign='top' align='left' width='370'>
                                    <div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable" align='center'>
                                        <p  style='text-align:left;color:#CCCCCC;font-size:12px;font-weight:normal;line-height:20px;'>
                                          <span style='font-weight:bold;'>IBM CLUB</span>
                                        </p>
                                      </div>
                                    </div>
                                  </td>

                                  <td width='30'></td>

                        

                                  <td width='16'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </div>

                    </td>
                  </tr>
<!-- =============================== footer ====================================== -->
                </table>
              </td>
              <td width='40'></td>
            </tr>
          </table>
        </td>
      </tr>

      <tr><td height='88'></td></tr>


    </table>

      </body>
      </html>


