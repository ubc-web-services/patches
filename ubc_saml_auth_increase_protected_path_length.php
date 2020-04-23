diff --git a/ubc_saml_auth.module b/ubc_saml_auth.module
index daa0236..2a78ca7 100644
--- a/ubc_saml_auth.module
+++ b/ubc_saml_auth.module
@@ -27,6 +27,7 @@ function ubc_saml_auth_admin() {
     '#title' => t('Protected paths'),
     '#default_value' => variable_get('ubc_saml_auth_protected_path', ''),
     '#description' => t("The list of paths aliases that should be CWL protected separated by commas."),
+    '#maxlength' => 512,
     '#required' => FALSE,
   );
   $form['ubc_saml_auth_wildcard'] = array(
