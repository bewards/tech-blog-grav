<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_33e48fcc3fccd65e73f4e22c30340458ea296d4c4ebc8714b0912e65034b0f82 extends Twig_Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", array()) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", array()))) : ($this->getAttribute(($context["blog"] ?? null), "url", array())));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", array())));
        // line 3
        echo "
";
        // line 4
        $context["sidebar_page"] = $this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/sidebar"), "method");
        // line 5
        $context["sidebar_page_content"] = $this->getAttribute(($context["sidebar_page"] ?? null), "content", array());
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 8
            echo "    <div class=\"sidebar-content\">
        ";
            // line 9
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 9)->display($context);
            // line 10
            echo "    </div>
";
        }
        // line 12
        echo "
";
        // line 14
        if ((($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", array()), "position", array()) == "top") || twig_test_empty($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", array()), "position", array())))) {
            // line 15
            echo "    ";
            if ( !twig_test_empty(($context["sidebar_page_content"] ?? null))) {
                // line 16
                echo "        <div class=\"sidebar-content\">
            ";
                // line 17
                echo ($context["sidebar_page_content"] ?? null);
                echo "
        </div>
    ";
            }
        }
        // line 21
        echo "
";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 23
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 24
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.SIDEBAR.RELATED_POSTS.HEADLINE");
            echo "</h4>
        ";
            // line 25
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 25)->display($context);
            // line 26
            echo "    </div>
";
        }
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 29
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 30
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.HEADLINE");
            echo "</h4>
        <a class=\"button\" href=\"";
            // line 31
            echo ($context["base_url"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY");
            echo "</a>
    </div>
";
        }
        // line 34
        echo "
";
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 36
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 37
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h4>
        ";
            // line 38
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 38)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag")));
            // line 39
            echo "    </div>
";
        }
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 42
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 43
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.SIDEBAR.ARCHIVES.HEADLINE");
            echo "</h4>
        ";
            // line 44
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 44)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null))));
            // line 45
            echo "    </div>
";
        }
        // line 47
        echo "
";
        // line 49
        if (($this->getAttribute($this->getAttribute(($context["sidebar_page"] ?? null), "header", array()), "position", array()) == "bottom")) {
            // line 50
            echo "    ";
            if ( !twig_test_empty(($context["sidebar_page_content"] ?? null))) {
                // line 51
                echo "        <div class=\"sidebar-content\">
            ";
                // line 52
                echo ($context["sidebar_page_content"] ?? null);
                echo "
        </div>
    ";
            }
        }
        // line 56
        echo "
";
        // line 57
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 58
            echo "    <div class=\"sidebar-content syndicate\">
        <h4>";
            // line 59
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_QUARK.SIDEBAR.SYNDICATE.HEADLINE");
            echo "</h4>
        <a class=\"btn\" href=\"";
            // line 60
            echo ($context["feed_url"] ?? null);
            echo ".atom\">
            <i class=\"fa fa-rss-square\"></i>
            Atom 1.0
        </a>
        <a class=\"btn\" href=\"";
            // line 64
            echo ($context["feed_url"] ?? null);
            echo ".rss\">
            <i class=\"fa fa-rss-square\"></i>
            RSS
        </a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 64,  160 => 60,  156 => 59,  153 => 58,  151 => 57,  148 => 56,  141 => 52,  138 => 51,  135 => 50,  133 => 49,  130 => 47,  126 => 45,  124 => 44,  120 => 43,  117 => 42,  115 => 41,  111 => 39,  109 => 38,  105 => 37,  102 => 36,  100 => 35,  97 => 34,  89 => 31,  85 => 30,  82 => 29,  80 => 28,  76 => 26,  74 => 25,  70 => 24,  67 => 23,  65 => 22,  62 => 21,  55 => 17,  52 => 16,  49 => 15,  47 => 14,  44 => 12,  40 => 10,  38 => 9,  35 => 8,  33 => 7,  30 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% set sidebar_page = pages.find('/sidebar') %}
{% set sidebar_page_content =  sidebar_page.content %}

{% if config.plugins.simplesearch.enabled %}
    <div class=\"sidebar-content\">
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>
{% endif %}

{# display sidebar markdown page - hibbittsdesign.org #}
{% if sidebar_page.header.position == 'top' or sidebar_page.header.position is empty %}
    {% if sidebar_page_content is not empty %}
        <div class=\"sidebar-content\">
            {{ sidebar_page_content }}
        </div>
    {% endif %}
{% endif %}

{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <div class=\"sidebar-content\">
        <h4>{{ 'THEME_QUARK.SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>
        {% include 'partials/relatedpages.html.twig' %}
    </div>
{% endif %}
{% if config.plugins.random.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>
        <a class=\"button\" href=\"{{ base_url }}/random\"><i class=\"fa fa-retweet\"></i> {{ 'SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>
    </div>
{% endif %}

{% if config.plugins.taxonomylist.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'THEME_QUARK.SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
        {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
    </div>
{% endif %}
{% if config.plugins.archives.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'THEME_QUARK.SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
        {% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
    </div>
{% endif %}

{# display sidebar markdown page - hibbittsdesign.org #}
{% if sidebar_page.header.position == 'bottom' %}
    {% if sidebar_page_content is not empty %}
        <div class=\"sidebar-content\">
            {{ sidebar_page_content }}
        </div>
    {% endif %}
{% endif %}

{% if config.plugins.feed.enabled %}
    <div class=\"sidebar-content syndicate\">
        <h4>{{ 'THEME_QUARK.SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
        <a class=\"btn\" href=\"{{ feed_url }}.atom\">
            <i class=\"fa fa-rss-square\"></i>
            Atom 1.0
        </a>
        <a class=\"btn\" href=\"{{ feed_url }}.rss\">
            <i class=\"fa fa-rss-square\"></i>
            RSS
        </a>
    </div>
{% endif %}
", "partials/sidebar.html.twig", "C:\\inetpub\\wwwroot\\grav-skeleton-open-publishing-space-site\\user\\themes\\quark-open-publishing\\templates\\partials\\sidebar.html.twig");
    }
}
