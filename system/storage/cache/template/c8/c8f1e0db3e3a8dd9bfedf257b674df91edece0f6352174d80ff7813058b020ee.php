<?php

/* marketplace/installer.twig */
class __TwigTemplate_53522a70cd35758336f949f8e1f8aefbfe1870f98805b5762f3df641c10f5589 extends Twig_Template
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
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
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
        // line 10
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-puzzle-piece\"></i> ";
        // line 15
        echo ($context["text_upload"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form>
          <fieldset>
            <legend>";
        // line 19
        echo ($context["text_upload"] ?? null);
        echo "</legend>
            <div class=\"form-group row required\">
              <label for=\"button-upload\" class=\"col-sm-2 col-form-label\">";
        // line 21
        echo ($context["entry_upload"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <button type=\"button\" id=\"button-upload\" data-loading-text=\"";
        // line 23
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-upload\"></i> ";
        echo ($context["button_upload"] ?? null);
        echo "</button>
                <small class=\"form-text text-muted\">";
        // line 24
        echo ($context["help_upload"] ?? null);
        echo "</small>
              </div>
            </div>
          </fieldset>
          <br/>
          <fieldset>
            <legend>";
        // line 30
        echo ($context["text_progress"] ?? null);
        echo "</legend>
            <div class=\"form-group row\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 32
        echo ($context["entry_progress"] ?? null);
        echo "</label>
              <div class=\"col-sm-10 mt-2\">
                <div class=\"progress\">
                  <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
                </div>
                <div id=\"progress-text\"></div>
              </div>
            </div>
          </fieldset>
          <br/>
          <fieldset>
            <legend>";
        // line 43
        echo ($context["text_history"] ?? null);
        echo "</legend>
            <div id=\"history\"></div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#history').on('click', '.pagination a', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});

\$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 58
        echo ($context["user_token"] ?? null);
        echo "');

\$('#button-upload').on('click', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t// Reset everything
\t\t\t\$('#progress-bar').css('width', '0%');
\t\t\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
\t\t\t\$('#progress-text').html('');

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=marketplace/installer/upload&user_token=";
        // line 81
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload').button('loading');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\t\t\$('#progress-text').html('<div class=\"invalid-tooltip\">' + json['error'] + '</div>');

\t\t\t\t\t\t\$('#button-upload').button('reset');
\t\t\t\t\t}

\t\t\t\t\tif (json['text']) {
\t\t\t\t\t\t\$('#progress-bar').css('width', '20%');
\t\t\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t\t\t}

\t\t\t\t\tif (json['next']) {
\t\t\t\t\t\tnext(json['next'], 1);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

function next(url, i) {
\ti = i + 1;

\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#progress-bar').css('width', (i * 20) + '%');

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"invalid-tooltip\">' + json['error'] + '</div>');

\t\t\t\t\$('#button-upload').button('reset');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');

\t\t\t\t\$('#button-upload').button('reset');

\t\t\t\t\$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 138
        echo ($context["user_token"] ?? null);
        echo "');
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], i);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

// Uninstall
\$('#history').on('click', '.btn-danger', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
\t\$('#progress-text').html('');

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/install/uninstall&user_token=";
        // line 166
        echo ($context["user_token"] ?? null);
        echo "&extension_install_id=' + \$(element).attr('value'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"invalid-tooltip\">' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').css('width', '100%');
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</div>');

\t\t\t\t\$('#history').load('index.php?route=marketplace/installer/history&user_token=";
        // line 185
        echo ($context["user_token"] ?? null);
        echo "');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
        // line 194
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketplace/installer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 194,  266 => 185,  244 => 166,  213 => 138,  153 => 81,  127 => 58,  109 => 43,  95 => 32,  90 => 30,  81 => 24,  75 => 23,  70 => 21,  65 => 19,  58 => 15,  51 => 10,  40 => 8,  36 => 7,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "marketplace/installer.twig", "");
    }
}
