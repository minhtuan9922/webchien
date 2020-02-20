<?php

/* marketplace/marketplace_info.twig */
class __TwigTemplate_923c5c1b223ef04b676ba521d4a7110f01cce0fb389b801c485bdad9e64cc15e extends Twig_Template
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
        ";
        // line 6
        if ( !($context["error_signature"] ?? null)) {
            // line 7
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_opencart"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fas fa-cog\"></i></button>
        ";
        } else {
            // line 9
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["error_signature"] ?? null);
            echo "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fas fa-exclamation-triangle\"></i></button>
        ";
        }
        // line 10
        echo " <a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
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
        // line 16
        echo "      </ol>
    </div>
  </div>
  <div id=\"marketplace-extension-info\" class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 25
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-puzzle-piece\"></i> ";
        // line 26
        echo ($context["name"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"row extension-info\">
          <div class=\"col-md-8 col-lg-9\">
            ";
        // line 30
        if (($context["banner"] ?? null)) {
            // line 31
            echo "              <div id=\"banner\" class=\"text-center img-thumbnail mb-3\"><img src=\"";
            echo ($context["banner"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\"/></div>
            ";
        }
        // line 33
        echo "            <div class=\"row thumbnails\">
              ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 35
            echo "                <div class=\"col-4 col-md-3 col-lg-2 mb-3\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", []);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", []);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", []);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", []);
            echo "\" class=\"img-fluid img-thumbnail\"/></a></div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </div>
            <ul class=\"nav nav-tabs\">
              <li class=\"nav-item\"><a href=\"#tab-description\" class=\"nav-link active\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-documentation\" class=\"nav-link\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_documentation"] ?? null);
        echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-download\" class=\"nav-link\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_download"] ?? null);
        echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-comment\" class=\"nav-link\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_comment"] ?? null);
        echo " (";
        echo ($context["comment_total"] ?? null);
        echo ")</a></li>
            </ul>
            <div class=\"tab-content\">
              <div id=\"tab-description\" class=\"tab-pane fade show active\">";
        // line 45
        echo ($context["description"] ?? null);
        echo "</div>
              <div id=\"tab-documentation\" class=\"tab-pane fade\">";
        // line 46
        echo ($context["documentation"] ?? null);
        echo "</div>
              <div id=\"tab-download\" class=\"tab-pane fade\">
                <fieldset>
                  <legend>";
        // line 49
        echo ($context["text_progress"] ?? null);
        echo "</legend>
                  <div id=\"progress\">
                    <div class=\"progress\">
                      <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
                    </div>
                    <div id=\"progress-text\"></div>
                  </div>
                  <hr/>
                </fieldset>
                <fieldset>
                  <legend>";
        // line 59
        echo ($context["text_available"] ?? null);
        echo "</legend>
                  <table class=\"table table-bordered\">
                    <thead>
                      <td>";
        // line 62
        echo ($context["text_name"] ?? null);
        echo "</td>
                      <td>";
        // line 63
        echo ($context["text_date_added"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 64
        echo ($context["text_action"] ?? null);
        echo "</td>
                    </thead>
                    <tbody>
                      ";
        // line 67
        if (($context["downloads"] ?? null)) {
            // line 68
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 69
                echo "                          <tr>
                            <td>";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["download"], "name", []);
                echo "</td>
                            <td>";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["download"], "date_added", []);
                echo "</td>
                            <td class=\"text-right\">
                              ";
                // line 73
                if (twig_get_attribute($this->env, $this->source, $context["download"], "extension_install_id", [])) {
                    // line 74
                    echo "                                <button type=\"button\" data-install=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "extension_download_id", []);
                    echo "\" data-uninstall=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "extension_install_id", []);
                    echo "\" data-loading=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i> ";
                    echo ($context["button_uninstall"] ?? null);
                    echo "</button>
                              ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source,                 // line 75
$context["download"], "filename", []),  -10) == ".ocmod.zip")) {
                    // line 76
                    echo "                                <button type=\"button\" data-install=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "extension_download_id", []);
                    echo "\" data-uninstall=\"\" data-loading=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-primary\"";
                    if ( !twig_get_attribute($this->env, $this->source, $context["download"], "status", [])) {
                        echo " disabled";
                    }
                    echo "><i class=\"fas fa-download\"></i> ";
                    echo ($context["button_install"] ?? null);
                    echo "</button>
                              ";
                } else {
                    // line 78
                    echo "                                <button type=\"button\" data-install=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "extension_download_id", []);
                    echo "\" data-uninstall=\"\" data-loading=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-primary\"";
                    if ( !twig_get_attribute($this->env, $this->source, $context["download"], "status", [])) {
                        echo " disabled";
                    }
                    echo "><i class=\"fas fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                              ";
                }
                // line 80
                echo "                            </td>
                          </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                      ";
        } else {
            // line 84
            echo "                        <tr>
                          <td colspan=\"3\" class=\"text-center\">";
            // line 85
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                        </tr>
                      ";
        }
        // line 88
        echo "                    </tbody>
                  </table>
                </fieldset>
              </div>
              <div id=\"tab-comment\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
        // line 94
        echo ($context["text_comment_add"] ?? null);
        echo "</legend>
                  <div class=\"form-group\">
                    <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 96
        echo ($context["text_write"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-comment\" class=\"btn btn-primary\">";
        // line 99
        echo ($context["button_comment"] ?? null);
        echo "</button>
                  </div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
        // line 104
        echo ($context["text_comment"] ?? null);
        echo "</legend>
                  <div id=\"comment\"></div>
                </fieldset>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 col-lg-3\">
            <div id=\"buy\" class=\"card mb-3\">
              <div class=\"card-body\">
                ";
        // line 113
        if (((($context["license"] ?? null) == "1") &&  !($context["purchased"] ?? null))) {
            // line 114
            echo "                  <button id=\"button-buy\" class=\"btn btn-success btn-lg btn-block\">";
            echo ($context["button_purchase"] ?? null);
            echo "</button>
                ";
        }
        // line 116
        echo "                <div id=\"price\" class=\"row\">
                  <div class=\"col-lg-5\"><strong>";
        // line 117
        echo ($context["text_price"] ?? null);
        echo "</strong></div>
                  <div class=\"col-lg-7 text-right\">";
        // line 118
        if (($context["license"] ?? null)) {
            // line 119
            echo "                      ";
            echo ($context["price"] ?? null);
            echo "
                    ";
        } else {
            // line 121
            echo "                      ";
            echo ($context["text_free"] ?? null);
            echo "
                    ";
        }
        // line 123
        echo "                  </div>
                </div>
                <hr>
                <ul class=\"list-check\">
                  <li>";
        // line 127
        echo ($context["text_partner"] ?? null);
        echo "</li>
                  <li>";
        // line 128
        echo ($context["text_support"] ?? null);
        echo "</li>
                  <li>";
        // line 129
        echo ($context["text_documentation"] ?? null);
        echo "</li>
                </ul>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>";
        // line 133
        echo ($context["text_rating"] ?? null);
        echo "</strong></div>
                  <div class=\"col-md-7 text-right\">";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 135
            echo "                      ";
            if ((($context["rating"] ?? null) >= $context["i"])) {
                echo "<i class=\"fas fa-star\"></i>";
            } else {
                echo "<i class=\"fas fa-star-o\"></i>";
            }
            // line 136
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " (";
        echo ($context["rating_total"] ?? null);
        echo ")
                  </div>
                </div>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>";
        // line 141
        echo ($context["text_date_modified"] ?? null);
        echo "</strong></div>
                  <div class=\"col-md-7 text-right\">";
        // line 142
        echo ($context["date_modified"] ?? null);
        echo "</div>
                </div>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>";
        // line 146
        echo ($context["text_date_added"] ?? null);
        echo "</strong></div>
                  <div class=\"col-md-7 text-right\">";
        // line 147
        echo ($context["date_added"] ?? null);
        echo "</div>
                </div>
              </div>
            </div>
            <div id=\"sales\" class=\"card mb-3\">
              <div class=\"card-body\"><i class=\"fas fa-shopping-cart\"></i> <strong>";
        // line 152
        echo ($context["sales"] ?? null);
        echo "</strong> ";
        echo ($context["text_sales"] ?? null);
        echo "</div>
            </div>
            <div id=\"sales\" class=\"card mb-3\">
              <div class=\"card-body\"><i class=\"fas fa-download\"></i> <strong>";
        // line 155
        echo ($context["downloaded"] ?? null);
        echo "</strong> ";
        echo ($context["text_downloaded"] ?? null);
        echo "</div>
            </div>
            <div class=\"card mb-3\">
              <div class=\"card-body\">
                <div class=\"media\">
                  <img src=\"";
        // line 160
        echo ($context["member_image"] ?? null);
        echo "\" alt=\"";
        echo ($context["member_username"] ?? null);
        echo "\" title=\"";
        echo ($context["member_username"] ?? null);
        echo "\" class=\"mr-3 rounded-circle\">
                  <div class=\"media-body\">
                    <h5 class=\"mt-0\"><a href=\"";
        // line 162
        echo ($context["filter_member"] ?? null);
        echo "\">";
        echo ($context["member_username"] ?? null);
        echo "</a></h5>
                    <small>";
        // line 163
        echo ($context["text_member_since"] ?? null);
        echo " ";
        echo ($context["member_date_added"] ?? null);
        echo "</small>
                  </div>
                </div>
                <br/>
                <a href=\"";
        // line 167
        echo ($context["filter_member"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_view_all"] ?? null);
        echo "</a> <a href=\"https://www.opencart.com/index.php?route=support/seller&amp;extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "\" target=\"_blank\" class=\"btn btn-outline-secondary btn-lg btn-block\">";
        echo ($context["button_get_support"] ?? null);
        echo "</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function(e) {
\t\$('#modal-opencart').remove();

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/api&user_token=";
        // line 181
        echo ($context["user_token"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-opencart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-opencart').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('body').append(html);

\t\t\t\$('#modal-opencart').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-buy').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-purchase').remove();

\thtml  = '<div id=\"modal-purchase\" class=\"modal\">';
\thtml += '  <div class=\"modal-dialog\">';
\thtml += '    <div class=\"modal-content\">';
\thtml += '      <div class=\"modal-header\">';
\thtml += '        <h5 class=\"modal-title\">";
        // line 210
        echo ($context["text_purchase"] ?? null);
        echo "</h5>';
\thtml += '        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>';
\thtml += '      </div>';
\thtml += '      <div class=\"modal-body\">';
\thtml += '        <p>";
        // line 214
        echo ($context["text_pin"] ?? null);
        echo "</p>';
\thtml += '        <p>";
        // line 215
        echo ($context["text_secure"] ?? null);
        echo "</p>';
\thtml += '        <div class=\"form-group\">';
\thtml += '          <label for=\"input-pin\">";
        // line 217
        echo ($context["entry_pin"] ?? null);
        echo "</label>';
\thtml += '          <input type=\"password\" name=\"pin\" value=\"\" placeholder=\"";
        // line 218
        echo ($context["entry_pin"] ?? null);
        echo "\" id=\"input-pin\" class=\"form-control\" />';
\thtml += '        </div>';
\thtml += '        <div class=\"form-group text-right\">';
\thtml += '          <div class=\"float-left\"><a href=\"https://www.opencart.com/index.php?route=support/contact\" class=\"btn btn-light btn-lg\" target=\"_blank\">";
        // line 221
        echo ($context["button_forgot_pin"] ?? null);
        echo "</a></div>';
\thtml += '          <button type=\"button\" id=\"button-purchase\" data-loading-text=\"";
        // line 222
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg\">";
        echo ($context["button_purchase"] ?? null);
        echo "</button>';
\thtml += '        </div>';
\thtml += '      </div>';
\thtml += '    </div>';
\thtml += '  </div>';
\thtml += '</div>';

\t\$('body').append(html);

\t\$('#modal-purchase').modal('show');
});

\$('body').on('click', '#modal-purchase #button-purchase', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/marketplace/purchase&user_token=";
        // line 240
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'pin\\']'),
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
\t\t\t\t\$('#modal-purchase .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#modal-purchase').modal('hide');

\t\t\t\t\$('#tab-download .btn-primary').prop('disabled', false);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Install
\$('#tab-download').on('click', '.btn-primary', function(e) {
\te.preventDefault();

\tvar element = this;

\t// Reset everything
\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
\t\$('#progress-text').html('');

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/marketplace/download&user_token=";
        // line 283
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "&extension_download_id=' + \$(this).attr('data-install'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"invalid-tooltip\">' + json['error'] + '</div>');

\t\t\t\t\$(element).button('reset');
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-bar').css('width', '20%');
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['extension_install_id']) {
\t\t\t\t\$(element).attr('data-uninstall', json['extension_install_id']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], element, 1);
\t\t\t}

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

function next(url, element, i) {
\ti = i + 1;

\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#progress-bar').css('width', (i * 20) + '%');

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"invalid-tooltip\">' + json['error'] + '</div>');

\t\t\t\t\$(element).button('reset');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');

\t\t\t\t\$(element).replaceWith('<button type=\"button\" data-install=\"' + \$(element).attr('data-install') + '\" data-uninstall=\"' + \$(element).attr('data-uninstall') + '\" data-loading=\"";
        // line 341
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i> ";
        echo ($context["button_uninstall"] ?? null);
        echo "</button>');
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], element, i);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

// Uninstall
\$('#tab-download').on('click', ' .btn-danger', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
\t\$('#progress-text').html('');

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/install/uninstall&user_token=";
        // line 369
        echo ($context["user_token"] ?? null);
        echo "&extension_install_id=' + \$(element).attr('data-uninstall'),
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

\t\t\t\t\$(element).replaceWith('<button type=\"button\" data-install=\"' + \$(element).attr('data-install') + '\" data-uninstall=\"\" data-loading=\"";
        // line 388
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-download\"></i> ";
        echo ($context["button_install"] ?? null);
        echo "</button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Comment
\$('#comment').on('click', '.pagination a', function(e) {
\te.preventDefault();

\t\$('#comment').load(this.href);
});

\$('#comment').load('index.php?route=marketplace/marketplace/comment&user_token=";
        // line 404
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

// Add comment
\$('#button-comment').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=marketplace/marketplace/addcomment&user_token=";
        // line 409
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-comment').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-comment').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-comment').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-comment').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#comment').load('index.php?route=marketplace/marketplace/comment&user_token=";
        // line 429
        echo ($context["user_token"] ?? null);
        echo "&extension_id=";
        echo ($context["extension_id"] ?? null);
        echo "');

\t\t\t\t\$('textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Next replies
\$('#comment').on('click', '.btn-block', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$(element).parent().parent().parent().append(html);

\t\t\t\$(element).parent().remove();
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Reply
\$('#comment').on('click', '.btn-link', function(e) {
\te.preventDefault();

\t\$(this).parent().parent().find('.reply-input-box').toggle();
});

// Add reply
\$('#comment').on('click', '.btn-primary', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'comment=' + encodeURIComponent(\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$(element).parents('.reply-input-box').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$(element).parents('.reply-input-box').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).parents('.reply-input-box').parents('.media').find('.reply-refresh').last().trigger('click');

\t\t\t\t\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Refresh
\$('#comment').on('click', '.reply-refresh', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$(element).parent().replaceWith(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype: 'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script>
";
        // line 546
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  917 => 546,  795 => 429,  770 => 409,  760 => 404,  739 => 388,  717 => 369,  684 => 341,  621 => 283,  573 => 240,  550 => 222,  546 => 221,  540 => 218,  536 => 217,  531 => 215,  527 => 214,  520 => 210,  488 => 181,  465 => 167,  456 => 163,  450 => 162,  441 => 160,  431 => 155,  423 => 152,  415 => 147,  411 => 146,  404 => 142,  400 => 141,  386 => 136,  379 => 135,  375 => 134,  371 => 133,  364 => 129,  360 => 128,  356 => 127,  350 => 123,  344 => 121,  338 => 119,  336 => 118,  332 => 117,  329 => 116,  323 => 114,  321 => 113,  309 => 104,  301 => 99,  295 => 96,  290 => 94,  282 => 88,  276 => 85,  273 => 84,  270 => 83,  262 => 80,  248 => 78,  234 => 76,  232 => 75,  221 => 74,  219 => 73,  214 => 71,  210 => 70,  207 => 69,  202 => 68,  200 => 67,  194 => 64,  190 => 63,  186 => 62,  180 => 59,  167 => 49,  161 => 46,  157 => 45,  149 => 42,  145 => 41,  141 => 40,  137 => 39,  133 => 37,  118 => 35,  114 => 34,  111 => 33,  101 => 31,  99 => 30,  92 => 26,  89 => 25,  81 => 21,  79 => 20,  73 => 16,  62 => 14,  58 => 13,  53 => 11,  46 => 10,  40 => 9,  34 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "marketplace/marketplace_info.twig", "");
    }
}
