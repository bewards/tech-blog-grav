<?php

/* partials/blog/title.html.twig */
class __TwigTemplate_c22b1bd1c2ea79fcb359f49f16c771a0a7090487e93df64493fe1c5a37bf7e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["title_level"] = ((($context["title_level"] ?? null)) ? (($context["title_level"] ?? null)) : ("h2"));
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 3
            echo "    <";
            echo ($context["title_level"] ?? null);
            echo " class=\"p-name mt-1\">
    ";
            // line 4
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 5
                echo "        <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
    ";
            }
            // line 7
            echo "    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
        </";
            // line 8
            echo ($context["title_level"] ?? null);
            echo ">
    ";
        } else {
            // line 10
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "post_icon", array())) {
                // line 11
                echo "            ";
                $context["titleicon"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "post_icon", array());
                // line 12
                echo "        ";
            } else {
                // line 13
                echo "            ";
                if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("post_icon")) {
                    // line 14
                    echo "                ";
                    $context["titleicon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("post_icon");
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "header", array()), "post_icon", array())) {
                    // line 17
                    echo "                ";
                    $context["titleicon"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "header", array()), "post_icon", array());
                    // line 18
                    echo "            ";
                }
                // line 19
                echo "        ";
            }
            // line 20
            echo "        ";
            if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "hidepagetitle"), "method")) {
                // line 21
                echo "            ";
                if (($context["titleicon"] ?? null)) {
                    // line 22
                    echo "                <";
                    echo ($context["title_level"] ?? null);
                    echo " class=\"p-name mt-1\"><a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", array());
                    echo "\" class=\"u-url\">
                <i class=\"fa fa-";
                    // line 23
                    echo ($context["titleicon"] ?? null);
                    echo "\" aria-hidden=\"true\"></i> ";
                    echo $this->getAttribute(($context["page"] ?? null), "title", array());
                    echo "
        </a>
        </";
                    // line 25
                    echo ($context["title_level"] ?? null);
                    echo ">
        ";
                } else {
                    // line 27
                    echo "            <";
                    echo ($context["title_level"] ?? null);
                    echo " class=\"p-name mt-1\"><a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", array());
                    echo "\" class=\"u-url\">";
                    echo $this->getAttribute(($context["page"] ?? null), "title", array());
                    echo "</a></";
                    echo ($context["title_level"] ?? null);
                    echo ">
        ";
                }
                // line 29
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/blog/title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  103 => 27,  98 => 25,  91 => 23,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  43 => 8,  36 => 7,  30 => 5,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set title_level = title_level ?: 'h2' %}
{% if page.header.link %}
    <{{ title_level }} class=\"p-name mt-1\">
    {% if page.header.continue_link is sameas(false) %}
        <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
    {% endif %}
    <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
        </{{ title_level }}>
    {% else %}
        {% if page.header.post_icon %}
            {% set titleicon = page.header.post_icon %}
        {% else %}
            {% if theme_var('post_icon') %}
                {% set titleicon = theme_var('post_icon') %}
            {% endif %}
            {% if page.parent.header.post_icon %}
                {% set titleicon = page.parent.header.post_icon %}
            {% endif %}
        {% endif %}
        {% if not (grav.uri.param('hidepagetitle')) %}
            {% if titleicon %}
                <{{ title_level }} class=\"p-name mt-1\"><a href=\"{{ page.url }}\" class=\"u-url\">
                <i class=\"fa fa-{{ titleicon }}\" aria-hidden=\"true\"></i> {{ page.title }}
        </a>
        </{{ title_level }}>
        {% else %}
            <{{ title_level }} class=\"p-name mt-1\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></{{ title_level }}>
        {% endif %}
    {% endif %}
{% endif %}
", "partials/blog/title.html.twig", "C:\\inetpub\\wwwroot\\grav-skeleton-open-publishing-space-site\\user\\themes\\quark-open-publishing\\templates\\partials\\blog\\title.html.twig");
    }
}
