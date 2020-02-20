<?php

/* common/developer.twig */
class __TwigTemplate_0b44cb234bb259c903869c325f48ee7f34159ca2b39d8fbfeb3b9bdd45593b04 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"modal-developer\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fas fa-cog\"></i> ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td>";
        // line 12
        echo ($context["column_component"] ?? null);
        echo "</td>
              <td class=\"w-25\">";
        // line 13
        echo ($context["entry_cache"] ?? null);
        echo "</td>
              <td class=\"text-right\" style=\"width: 1px;\">";
        // line 14
        echo ($context["column_action"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tr>
            <td>";
        // line 18
        echo ($context["entry_theme"] ?? null);
        echo "</td>
            <td></td>
            <td class=\"text-right\"><button type=\"button\" value=\"theme\" data-toggle=\"tooltip\" title=\"";
        // line 20
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-sync\"></i></button></td>
          </tr>
          <tr>
            <td>";
        // line 23
        echo ($context["entry_sass"] ?? null);
        echo "</td>
            <td>
              <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                ";
        // line 26
        if (($context["developer_sass"] ?? null)) {
            // line 27
            echo "                  <label class=\"btn btn-outline-secondary active\"> <input type=\"radio\" name=\"developer_sass\" value=\"1\" checked>";
            echo ($context["button_on"] ?? null);
            echo "</label>
                ";
        } else {
            // line 29
            echo "                  <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"developer_sass\" value=\"1\">";
            echo ($context["button_on"] ?? null);
            echo "</label>
                ";
        }
        // line 31
        echo "                ";
        if ( !($context["developer_sass"] ?? null)) {
            // line 32
            echo "                  <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"developer_sass\" value=\"0\" checked>";
            echo ($context["button_off"] ?? null);
            echo "</label>
                ";
        } else {
            // line 34
            echo "                  <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"developer_sass\" value=\"0\">";
            echo ($context["button_off"] ?? null);
            echo "</label>
                ";
        }
        // line 35
        echo "</div>
            </td>
            <td class=\"text-right\"><button type=\"button\" value=\"sass\" data-toggle=\"tooltip\" title=\"";
        // line 37
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-sync\"></i></button></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'developer_sass\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=common/developer/edit&user_token=";
        // line 47
        echo ($context["user_token"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'developer_sass\\']:checked'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('input[name=\\'developer_sass\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('input[name=\\'developer_sass\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\tif (json['error']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t\tif (json['success']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});


\$('#modal-developer table button').on('click', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=common/developer/' + \$(element).attr('value') + '&user_token=";
        // line 77
        echo ($context["user_token"] ?? null);
        echo "',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "common/developer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 77,  117 => 47,  104 => 37,  100 => 35,  94 => 34,  88 => 32,  85 => 31,  79 => 29,  73 => 27,  71 => 26,  65 => 23,  59 => 20,  54 => 18,  47 => 14,  43 => 13,  39 => 12,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/developer.twig", "");
    }
}
