<?php

$_LANG['adddomain']         = 'הוסף דומיין';
$_LANG['domain']            = 'דומיין';
$_LANG['registrationtype']  = 'סוג רישום';
$_LANG['registration']      = 'רישום';
$_LANG['transfer']          = 'העבר';
$_LANG['regperiod']         = 'תקופת רישום';
$_LANG['eppcode']           = 'EPP קוד';
$_LANG['domainaddons']      = 'תוספי דומיין';
$_LANG['dnsmanagement']     = 'DNS ניהול';
$_LANG['idprotection']      = 'ID הגנת ';
$_LANG['emailforwarding']   = 'הפניית דואר אלקטרוני';
$_LANG['years']             = 'שנים';
$_LANG['chooseproduct']     = 'בחר מוצר';
$_LANG['product']           = 'מוצר/שירות';
$_LANG['dpv']               = 'Data policy violation!';
$_LANG['empty_temp']        = '<strong>שגיאה!</strong> שם התבנית אינו יכול להישאר ריק!';
$_LANG['existing_temp']     = '<strong>שגיאה!</strong> תבנית בשם זו כבר קיימת במערכת!';
$_LANG['added_temp']        = '<strong>הצלחה!</strong> התבנית הוספה בהצלחה.';
$_LANG['empty_email']       = 'כתובת דואר אלקטרוני של המשתמש אינה יכולה להישאר ריקה!';
$_LANG['user_exists']       = 'משתמש עם כתובת דואר אלקטרוני זו כבר קיים במערכת!';
$_LANG['no_templates']      = '<strong>שגיאה!</strong> תבנית אינה קיימת במערכת או שלא נשמרו תבניות!';
$_LANG['template_rem']      = '<strong>הצלחה!</strong> התבנית הוסרה בהצלחה.';
$_LANG['order_added']       = 'ההזמנה נוספה.';
$_LANG['order_error']       = 'אירעה שגיאה בעת הוספת ההזמנה: ';
$_LANG['addons']            = 'תוספים';
$_LANG['about']             = 'אודות';
$_LANG['description']       = 'Quotes Automation For WHMCS will allow you to create templates for quotes. You will be able to add, edit and delete templates as well as manage included products.<br>
The module will also simplify the process of placing an order. Once a quote is ready, both you and your clients will be able to place an order directly from the quote page.<br>
More information about this module can be found in our Wiki article: <a href="http://www.docs.modulesgarden.com/Quotes_Automation_For_WHMCS">http://www.docs.modulesgarden.com/Quotes_Automation_For_WHMCS</a><br><br>
<legend>Intergation Code</legend>
Applying integration code shown below will automatically generate order and invoice after accepting quote by client.<br>
Note that regardless of placing the integration code, you still have to enable this option in the module settings to benefit from it.<br><br>

Edit file <strong>viewquote.tpl</strong> located in <strong>your_whmcs/templates/default/</strong> and add this code:
<pre>{php}
      $perm = mysql_fetch_assoc(mysql_query(\'SELECT val FROM quotes_extended_permissions WHERE id=7 AND perm=7\'));
      if($perm[\'val\'] == "on") {
        echo \'&lt;script type="text/javascript" src="modules/addons/quotesautomation/js/order.js"&gt;&lt;/script&gt;\';
        echo \'&lt;div id="preloader"&gt;&lt;img src="modules/addons/quotesautomation/img/ajax-loader.gif" /&gt;&lt;/div&gt;\';
        echo \'&lt;div id="darkscreen"&gt;&lt;/div&gt;\';
        echo \'&lt;link href="modules/addons/quotesautomation/css/style.css" rel="stylesheet" type="text/css" /&gt;\';
      }
{/php}</pre>
In the line 8, right after:
<pre>&lt;html&gt;
&lt;head&gt;
&lt;title&gt;{$companyname} - {$id}&lt;/title&gt;
&lt;link rel="stylesheet" type="text/css" href="templates/{$template}/css/quote.css"&gt;
&lt;link href="includes/jscript/css/ui.all.css" rel="stylesheet" type="text/css" /&gt;
&lt;script type="text/javascript" src="includes/jscript/jquery.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="includes/jscript/jqueryui.js"&gt;&lt;/script&gt;
</pre>';
$_LANG['confirmation']      = 'אנא וודאו כי אתם מכירים את המידע המוצג מעלה: ';
$_LANG['confirm']           = 'אשר';
$_LANG['del_quote']         = 'מחק את הצעת המחיר כאשר התבנית מוכנה';
$_LANG['place_order']       = 'אפשר ללקוחות ליצור הזמנה לאחר אישור הצעת המחיר';
$_LANG['addon_opt']         = 'אפשרויות תוסף';
$_LANG['save_changes']      = 'שמור שינויים';
$_LANG['addon_perm']        = 'הרשאות תוסף';
$_LANG['load_temp']         = 'טען תבנית';
$_LANG['save_temp']         = 'שמור תבניתe';
$_LANG['del_temp']          = 'מחק תבנית';
$_LANG['order']             = 'הוסף הזמנה';
$_LANG['add_domain']        = 'הוסף דומיין';
$_LANG['access_denied']     = 'הגישה נדחתה!';
$_LANG['label_a']           = 'הסר הצעת מחיר בעת שמירה כתבנית';
$_LANG['label_b']           = 'אשר הצעת מחיר &amp; הזמנה';
$_LANG['billing_cycle']     = 'מחזור חיוב:';
$_LANG['rra']               = 'שנה סכום לתשלום באופן חד פעמי';