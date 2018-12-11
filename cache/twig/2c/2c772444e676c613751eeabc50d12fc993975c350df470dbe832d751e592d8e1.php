<?php

/* partials/base.html.twig */
class __TwigTemplate_d319c88789e54c925f3e06d5fee7ad9eccf6550eda1134166478731eeb44ccd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc(array(0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"));
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production_mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "site", array()), "default_lang", array())));
        echo "\">
<head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "</head>
<body id=\"top\" class=\"";
        // line 39
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
<div id=\"page-wrapper\">

    ";
        // line 43
        echo "    <h1 class=\"hidden\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>

    ";
        // line 46
        echo "    ";
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "embedded"), "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 47
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 78
            echo "
        ";
            // line 79
            $this->displayBlock('hero', $context, $blocks);
            // line 80
            echo "    ";
        } else {
            // line 81
            echo "        <div style=\"margin-bottom: -80px;\"></div>
    ";
        }
        // line 83
        echo "
    <section id=\"start\">
        ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "    </section>

</div>
";
        // line 108
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "embedded"), "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 109
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 125
        echo "
<div class=\"mobile-container\">
    <div class=\"overlay\" id=\"overlay\">
        <div class=\"mobile-logo\">
            ";
        // line 129
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 129)->display(array_merge($context, array("mobile" => true)));
        // line 130
        echo "        </div>
        <nav class=\"overlay-menu\">
            ";
        // line 132
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 132)->display(array_merge($context, array("tree" => true)));
        // line 133
        echo "        </nav>
    </div>
</div>

";
        // line 138
        $this->loadTemplate("partials/scripts.html.twig", "partials/base.html.twig", 138)->display($context);
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('bottom', $context, $blocks);
        // line 143
        echo "
</body>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "        <meta charset=\"utf-8\"/>
        <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\"/>
        <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>

        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

    ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))), "method");
        // line 20
        echo "            ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))), "method");
        }
        // line 21
        echo "            ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))), "method");
        }
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))), "method");
        // line 23
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/theme.css", 1 => 100), "method");
        // line 24
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 25
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css"), "method");
        // line 26
        echo "        ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 31
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.treemenu.js", 1 => array("group" => "bottom")), "method");
        // line 32
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/site.js", 1 => array("group" => "bottom")), "method");
        // line 33
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/my.js", 1 => 100), "method");
        // line 34
        echo "        ";
    }

    // line 39
    public function block_body_classes($context, array $blocks = array())
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        // line 48
        echo "            <section id=\"header\" class=\"section\">
                <section class=\"container ";
        // line 49
        echo ($context["grid_size"] ?? null);
        echo "\">
                    <nav class=\"navbar\">
                        <section class=\"navbar-section logo\">
                            ";
        // line 52
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "                        </section>
                        <section class=\"navbar-section\">

                            <nav class=\"dropmenu animated\">
                                ";
        // line 57
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 60
        echo "                            </nav>

                            ";
        // line 62
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 63
            echo "                                <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 63)->display($context);
            echo "</span>
                            ";
        }
        // line 65
        echo "
                        </section>
                    </nav>
                </section>
            </section>
            <div class=\"mobile-menu\">
                <div class=\"button_container\" id=\"toggle\">
                    <span class=\"top\"></span>
                    <span class=\"middle\"></span>
                    <span class=\"bottom\"></span>
                </div>
            </div>
        ";
    }

    // line 57
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 58
        echo "                                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "                                ";
    }

    // line 79
    public function block_hero($context, array $blocks = array())
    {
    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        // line 86
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 87
        echo ($context["grid_size"] ?? null);
        echo "\">
                    ";
        // line 88
        $this->displayBlock('messages', $context, $blocks);
        // line 91
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "
                    ";
        // line 93
        echo " ";
        // line 94
        echo "                    ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "page") &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "summaryonly"), "method"))) {
            // line 95
            echo "                        <p>";
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "partials/base.html.twig", 95)->display($context);
            echo "</p>
                    ";
        }
        // line 97
        echo "                    ";
        if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hide_cc_license", array()))) {
            // line 98
            echo "                        <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "partials/base.html.twig", 98)->display($context);
            echo "</p>
                    ";
        }
        // line 100
        echo "
                </section>
            </section>
        ";
    }

    // line 88
    public function block_messages($context, array $blocks = array())
    {
        // line 89
        echo "                        ";
        try {
            $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 89)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 90
        echo "                    ";
    }

    // line 91
    public function block_content($context, array $blocks = array())
    {
    }

    // line 109
    public function block_footer($context, array $blocks = array())
    {
        // line 110
        echo "        <section id=\"footer\" class=\"section bg-gray\">
            <section class=\"container ";
        // line 111
        echo ($context["grid_size"] ?? null);
        echo "\">
                ";
        // line 113
        echo "                ";
        if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "footer")) {
            // line 114
            echo "                    <br>";
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/base.html.twig", 114)->display($context);
            echo "<br><br>
                ";
        }
        // line 116
        echo "                ";
        // line 117
        echo "                ";
        $context["content"] = $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/footer"), "method"), "content", array());
        // line 118
        echo "                ";
        if (($context["content"] ?? null)) {
            // line 119
            echo "                    ";
            echo ($context["content"] ?? null);
            echo "
                ";
        }
        // line 121
        echo "            </section>
        </section>
    ";
    }

    // line 140
    public function block_bottom($context, array $blocks = array())
    {
        // line 141
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 141,  405 => 140,  399 => 121,  393 => 119,  390 => 118,  387 => 117,  385 => 116,  379 => 114,  376 => 113,  372 => 111,  369 => 110,  366 => 109,  361 => 91,  357 => 90,  349 => 89,  346 => 88,  339 => 100,  333 => 98,  330 => 97,  324 => 95,  321 => 94,  319 => 93,  316 => 92,  313 => 91,  311 => 88,  307 => 87,  304 => 86,  301 => 85,  296 => 79,  292 => 59,  289 => 58,  286 => 57,  270 => 65,  264 => 63,  262 => 62,  258 => 60,  256 => 57,  250 => 53,  248 => 52,  242 => 49,  239 => 48,  236 => 47,  230 => 39,  226 => 34,  223 => 33,  220 => 32,  217 => 31,  214 => 30,  211 => 29,  207 => 26,  204 => 25,  201 => 24,  198 => 23,  195 => 22,  190 => 21,  185 => 20,  182 => 19,  179 => 18,  171 => 35,  169 => 29,  163 => 27,  161 => 18,  156 => 16,  152 => 15,  149 => 14,  147 => 13,  136 => 9,  133 => 8,  130 => 7,  124 => 143,  122 => 140,  119 => 139,  117 => 138,  111 => 133,  109 => 132,  105 => 130,  103 => 129,  97 => 125,  93 => 109,  91 => 108,  86 => 104,  84 => 85,  80 => 83,  76 => 81,  73 => 80,  71 => 79,  68 => 78,  65 => 47,  62 => 46,  56 => 43,  50 => 39,  47 => 38,  45 => 7,  40 => 5,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production_mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\"/>
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% include 'partials/metadata.html.twig' %}

        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\"/>
        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>

        {% block stylesheets %}
            {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
            {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress) %}{% endif %}
            {% if theme_var('spectre.icons') %}{% do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
            {% do assets.addCss('theme://css-compiled/theme'~compress) %}
            {% do assets.addCss('theme://css/theme.css',100) %}
            {% do assets.addCss('theme://css/custom.css') %}
            {% do assets.addCss('theme://css/font-awesome.min.css') %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.addJs('jquery', 101) %}
            {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
            {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
            {% do assets.addJs('theme://js/my.js', 100) %}
        {% endblock %}
        {{ assets.js() }}

    {% endblock head %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
<div id=\"page-wrapper\">

    {# added hidden page title for screen readers - hibbittsdesign.org #}
    <h1 class=\"hidden\">{{ page.title }}</h1>

    {# check content display flag - hibbittsdesign.org #}
    {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
        {% block header %}
            <section id=\"header\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    <nav class=\"navbar\">
                        <section class=\"navbar-section logo\">
                            {% include 'partials/logo.html.twig' %}
                        </section>
                        <section class=\"navbar-section\">

                            <nav class=\"dropmenu animated\">
                                {% block header_navigation %}
                                    {% include 'partials/navigation.html.twig' %}
                                {% endblock %}
                            </nav>

                            {% if config.plugins.login.enabled and grav.user.username %}
                                <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                            {% endif %}

                        </section>
                    </nav>
                </section>
            </section>
            <div class=\"mobile-menu\">
                <div class=\"button_container\" id=\"toggle\">
                    <span class=\"top\"></span>
                    <span class=\"middle\"></span>
                    <span class=\"bottom\"></span>
                </div>
            </div>
        {% endblock %}

        {% block hero %}{% endblock %}
    {% else %}
        <div style=\"margin-bottom: -80px;\"></div>
    {% endif %}

    <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {% block content %}{% endblock %}

                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if theme_var('cc_license.enabled') and (not page.header.hide_cc_license) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}

                </section>
            </section>
        {% endblock %}
    </section>

</div>
{# check content display flag - hibbittsdesign.org #}
{% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and (not theme_var('chromeless.enabled')) %}
    {% block footer %}
        <section id=\"footer\" class=\"section bg-gray\">
            <section class=\"container {{ grid_size }}\">
                {# check to display git sync link in footer or not yet defined by saving theme settings - hibbittsdesign.org #}
                {% if theme_var('display_of_git_sync_repo_link') == 'footer' %}
                    <br>{% include 'partials/git_sync_repo_link.html.twig' %}<br><br>
                {% endif %}
                {# display footer markdown page - hibbittsdesign.org #}
                {% set content = pages.find('/footer').content %}
                {% if content %}
                    {{ content }}
                {% endif %}
            </section>
        </section>
    {% endblock %}
{% endif %}

<div class=\"mobile-container\">
    <div class=\"overlay\" id=\"overlay\">
        <div class=\"mobile-logo\">
            {% include 'partials/logo.html.twig' with {mobile: true} %}
        </div>
        <nav class=\"overlay-menu\">
            {% include 'partials/navigation.html.twig' with {tree: true} %}
        </nav>
    </div>
</div>

{# added global scripts - hibbittsdesign.org #}
{% include 'partials/scripts.html.twig' %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
", "partials/base.html.twig", "C:\\inetpub\\wwwroot\\grav-skeleton-open-publishing-space-site\\user\\themes\\quark-open-publishing\\templates\\partials\\base.html.twig");
    }
}
