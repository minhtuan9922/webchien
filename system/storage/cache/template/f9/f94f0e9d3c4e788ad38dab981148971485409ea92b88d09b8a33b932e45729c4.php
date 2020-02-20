<?php

/* marketplace/event.twig */
class __TwigTemplate_8ed1a15e0ec8e129f001e8e2feda07881f64b0d7047ed9204ee5dc9020f58579 extends Twig_Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-event').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", []);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", []);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 27
        echo "    <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
        echo ($context["text_event"] ?? null);
        echo "</div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 31
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-event\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 37
        if ((($context["sort"] ?? null) == "code")) {
            echo "<a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "status")) {
            echo "<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-right\">";
        // line 39
        if ((($context["sort"] ?? null) == "sort_order")) {
            echo "<a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-right\">";
        // line 40
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 44
        if (($context["events"] ?? null)) {
            // line 45
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 46
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 47
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["event"], "event_id", []), ($context["selected"] ?? null))) {
                    // line 48
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["event"], "event_id", []);
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 50
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["event"], "event_id", []);
                    echo "\"/>
                        ";
                }
                // line 51
                echo "</td>
                      <td class=\"text-left\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["event"], "code", []);
                echo "</td>
                      <td class=\"text-left\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["event"], "status", []);
                echo "</td>
                      <td class=\"text-right\">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["event"], "sort_order", []);
                echo "</td>
                      <td class=\"text-right\"><button type=\"button\" data-trigger=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["event"], "trigger", []);
                echo "\" data-action=\"";
                echo twig_get_attribute($this->env, $this->source, $context["event"], "action", []);
                echo "\" class=\"btn btn-info\"><i class=\"fas fa-info-circle\"></i></button>
                        ";
                // line 56
                if ( !twig_get_attribute($this->env, $this->source, $context["event"], "enabled", [])) {
                    // line 57
                    echo "                          <button type=\"button\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["event"], "event_id", []);
                    echo "\" data-toggle=\"tooltip\" data-title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fas fa-plus-circle\"></i></button>
                        ";
                } else {
                    // line 59
                    echo "                          <button type=\"button\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["event"], "event_id", []);
                    echo "\" data-toggle=\"tooltip\" data-title=\"";
                    echo ($context["button_disable"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>
                        ";
                }
                // line 61
                echo "                      </td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                ";
        } else {
            // line 65
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"5\">";
            // line 66
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 69
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 74
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 75
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-event').on('click', '.btn-success', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/event/enable&user_token=";
        // line 86
        echo ($context["user_token"] ?? null);
        echo "&event_id=' + \$(element).val(),
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
\t\t\t\t\$('.alert-info').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.alert-info').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).replaceWith('<button type=\"button\" value=\"' + \$(element).val() + '\" data-toggle=\"tooltip\" data-title=\"";
        // line 104
        echo ($context["button_disable"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#form-event').on('click', '.btn-danger', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/event/disable&user_token=";
        // line 117
        echo ($context["user_token"] ?? null);
        echo "&event_id=' + \$(element).val(),
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
\t\t\t\t\$('.alert-info').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.alert-info').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).replaceWith('<button type=\"button\" value=\"' + \$(element).val() + '\" data-toggle=\"tooltip\" data-title=\"";
        // line 135
        echo ($context["button_enable"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-plus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#form-event').on('click', '.btn-info', function() {
\t\$('#modal-event').remove();

\thtml  = '<div id=\"modal-event\" class=\"modal\">';
\thtml += '  <div class=\"modal-dialog\">';
\thtml += '    <div class=\"modal-content\">';
\thtml += '      <div class=\"modal-header\">';
\thtml += '        <h5 class=\"modal-title\">";
        // line 151
        echo ($context["text_info"] ?? null);
        echo "</h5>';
\thtml += '        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>';
\thtml += '      </div>';
\thtml += '      <div class=\"modal-body\">';
\thtml += '        <div class=\"form-group\">';
\thtml += '          <label for=\"input-trigger\" class=\"col-form-label\">";
        // line 156
        echo ($context["text_trigger"] ?? null);
        echo "</label> <textarea id=\"input-trigger\" class=\"form-control\" disabled>' + \$(this).attr('data-trigger') + '</textarea>';
\thtml += '        </div>';
\thtml += '        <div class=\"form-group\">';
\thtml += '          <label for=\"input-trigger\" class=\"col-form-label\">";
        // line 159
        echo ($context["text_action"] ?? null);
        echo "</label> <textarea id=\"input-trigger\" class=\"form-control\" disabled>' + \$(this).attr('data-action') + '</textarea>';
\thtml += '        </div>';
\thtml += '      </div>';
\thtml += '    </div>';
\thtml += '  </div>';
\thtml += '</div>';

\t\$('body').append(html);

\t\$('#modal-event').modal('show');
});
//--></script>
";
        // line 171
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "marketplace/event.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 171,  366 => 159,  360 => 156,  352 => 151,  333 => 135,  312 => 117,  296 => 104,  275 => 86,  261 => 75,  257 => 74,  250 => 69,  244 => 66,  241 => 65,  238 => 64,  230 => 61,  222 => 59,  214 => 57,  212 => 56,  206 => 55,  202 => 54,  198 => 53,  194 => 52,  191 => 51,  185 => 50,  179 => 48,  177 => 47,  174 => 46,  169 => 45,  167 => 44,  160 => 40,  142 => 39,  124 => 38,  106 => 37,  97 => 31,  92 => 29,  86 => 27,  78 => 23,  75 => 22,  67 => 18,  65 => 17,  59 => 13,  48 => 11,  44 => 10,  39 => 8,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "marketplace/event.twig", "");
    }
}
