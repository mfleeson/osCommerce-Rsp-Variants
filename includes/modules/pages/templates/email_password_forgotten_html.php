<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php include(DIR_FS_CATALOG . DIR_WS_MODULES . 'pages/templates/html_email_head.php'); ?>
</head>

<body style="background-color:#F2F2F2;">
  <center>
    <table id="bodyTable" cellspacing="0" cellpadding="0" border="0" width="100%" height="100%" style="background-color:#F2F2F2;">
      <tbody>
        <tr>
          <td id="bodyCell" valign="top" align="center" style="padding:40px 20px;">
            <table id="contentContainer" cellspacing="0" cellpadding="0" border="0" style="max-width:600px !important; width:100% !important;">
              <tr>
                <td align="center" valign="top" style="padding-bottom:0px;">
                  <table id="emailBody" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:#FFFFFF; border-collapse:separate !important; border-radius:4px;">
                    <tr>
                      <td align="center" valign="top" class="mobilePadding" style=" padding-top:40px; padding-right:40px; padding-bottom:30px; padding-left:40px;">
                        <table id="header" width="100%">
                          <tr>
                            <td><img src="<?php echo ((defined(ENABLE_SSL_CATALOG)) ? ( ENABLE_SSL_CATALOG == 'true' ? HTTPS_CATALOG_SERVER . DIR_WS_HTTPS_CATALOG : HTTP_CATALOG_SERVER . DIR_WS_CATALOG ) : (ENABLE_SSL == 'true' ? HTTPS_SERVER . DIR_WS_HTTPS_CATALOG : HTTP_SERVER . DIR_WS_HTTPS_CATALOG)) . DIR_WS_IMAGES . STORE_LOGO; ?>" title="<?php echo STORE_NAME; ?>" alt="<?php echo STORE_NAME; ?>"></td>
                          </tr>
                        </table>
                        <h1 style="color:#606060 !important; font-size:26px;"><?php echo EMAIL_PASSWORD_RESET_SUBJECT; ?></h1>
                        <table id="content" width="100%">
                          <tr><td><?php  echo tep_convert_linefeeds(array("\r\n", "\n", "\r"), "<br />", sprintf(EMAIL_PASSWORD_RESET_BODY, '<a href="' . $reset_key_url . '">' . EMAIL_LINK . '</a>')); ?></td></tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  <table id="footer" width="100%">
                    <tr>
                      <td style="padding-top:30px; text-align: center;"><?php echo tep_convert_linefeeds(array("\r\n", "\n", "\r"), "<br />", STORE_ADDRESS); ?><br /><?php echo STORE_PHONE; ?></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </center>
  <p><?php include(DIR_FS_CATALOG . DIR_WS_MODULES . 'pages/templates/html_email_foot.php'); ?></p>
</body>
</html>
