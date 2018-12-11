<?php

/* blog.html.twig */
class __TwigTemplate_a4ec94ab6ba85f1ada586ae47365b52f894ba2b47edba362b0193cc7ad3e80fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "show_breadcrumbs", array(), "any", true, true)) {
            // line 6
            $context["show_breadcrumbs"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "show_breadcrumbs", array());
        } else {
            // line 8
            $context["show_breadcrumbs"] = true;
        }
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "show_sidebar", array(), "any", true, true)) {
            // line 11
            $context["show_sidebar"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "show_sidebar", array());
        } else {
            // line 13
            $context["show_sidebar"] = true;
        }
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "show_pagination", array(), "any", true, true)) {
            // line 16
            $context["show_pagination"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "show_pagination", array());
        } else {
            // line 18
            $context["show_pagination"] = true;
        }
        // line 32
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "embedded"), "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/bricklayer.css"), "method");
        // line 23
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 28
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/bricklayer.min.js"), "method");
    }

    // line 33
    public function block_hero($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 34)->display(array_merge($context, array("id" => "blog-hero", "content" => $this->getAttribute(($context["page"] ?? null), "content", array()), "hero_image" => ($context["blog_image"] ?? null))));
        // line 35
        echo "    ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container ";
        // line 40
        echo ($context["grid_size"] ?? null);
        echo "\">

            ";
        // line 42
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array()))) {
            // line 43
            echo "                ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 43)->display($context);
            // line 44
            echo "            ";
        }
        // line 45
        echo "
            ";
        // line 46
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 46, "938434369")->display(array_merge($context, array("blog" => ($context["page"] ?? null))));
        // line 94
        echo "        </section>

    </section>
    <script>
        //Bricklayer
        ";
        // line 99
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "bricklayer_layout", array(), "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "bricklayer_layout", array()))) {
            // line 100
            echo "            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        ";
        }
        // line 102
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 102,  131 => 100,  129 => 99,  122 => 94,  120 => 46,  117 => 45,  114 => 44,  111 => 43,  109 => 42,  104 => 40,  101 => 39,  98 => 38,  94 => 35,  91 => 34,  88 => 33,  84 => 28,  79 => 27,  76 => 26,  69 => 23,  66 => 22,  63 => 21,  59 => 1,  56 => 32,  53 => 18,  50 => 16,  48 => 15,  45 => 13,  42 => 11,  40 => 10,  37 => 8,  34 => 6,  32 => 5,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{# revise checks for Blog list page options - hibbittsdesign.org #}
{% if page.header.show_breadcrumbs is defined %}
    {% set show_breadcrumbs = page.header.show_breadcrumbs %}
{% else %}
    {% set show_breadcrumbs = true %}
{% endif %}
{% if page.header.show_sidebar is defined %}
    {% set show_sidebar = page.header.show_sidebar %}
{% else %}
    {% set show_sidebar = true %}
{% endif %}
{% if page.header.show_pagination is defined %}
    {% set show_pagination = page.header.show_pagination %}
{% else %}
    {% set show_pagination = true %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}

{# check content display flag - hibbittsdesign.org #}
{% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
    {% block hero %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
    {% endblock %}
{% endif %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

            {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}

            {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            <div class=\"bricklayer\">
                {% else %}
                <div>
                    {% endif %}

                    {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
                    {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                        {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                    {% endfor %}

                    {# display posts without 'featured' tag - hibbittsdesign.org #}
                    {% for child in collection %}
                        {% if \"featured\" not in child.taxonomy['tag'] %}
                            {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                        {% endif %}
                    {% endfor %}

                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

                <div style=\"text-align:center;\">
                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if theme_var('cc_license.enabled') and (not page.header.hide_cc_license) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}
                </div>

                {% endblock %}

                {# check content display flag - hibbittsdesign.org #}
                {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
                    {% block sidebar %}
                        {% include 'partials/sidebar.html.twig' %}
                    {% endblock %}
                {% endif %}
                {% endembed %}
        </section>

    </section>
    <script>
        //Bricklayer
        {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        {% endif %}
    </script>
{% endblock %}
", "blog.html.twig", "C:\\inetpub\\wwwroot\\grav-skeleton-open-publishing-space-site\\user\\themes\\quark-open-publishing\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_a4ec94ab6ba85f1ada586ae47365b52f894ba2b47edba362b0193cc7ad3e80fb_938434369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 46
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "blog.html.twig", 46);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 88
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "embedded"), "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
        }
        // line 46
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    public function block_item($context, array $blocks = array())
    {
        // line 48
        echo "
            ";
        // line 49
        if (( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "bricklayer_layout", array(), "any", true, true) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "bricklayer_layout", array()))) {
            // line 50
            echo "            <div class=\"bricklayer\">
                ";
        } else {
            // line 52
            echo "                <div>
                    ";
        }
        // line 54
        echo "
                    ";
        // line 56
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", array(0 => array("tag" => "featured")), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 57
            echo "                        ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 57)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"])));
            // line 58
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
                    ";
        // line 61
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 62
            echo "                        ";
            if (!twig_in_filter("featured", $this->getAttribute($this->getAttribute($context["child"], "taxonomy", array()), "tag", array(), "array"))) {
                // line 63
                echo "                            ";
                $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 63)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"])));
                // line 64
                echo "                        ";
            }
            // line 65
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                </div>

                ";
        // line 69
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array())) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 70
            echo "                    <div id=\"listing-footer\">
                        ";
            // line 71
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 71)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 72
            echo "                    </div>
                ";
        }
        // line 74
        echo "
                <div style=\"text-align:center;\">
                    ";
        // line 76
        echo " ";
        // line 77
        echo "                    ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "page") &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "summaryonly"), "method"))) {
            // line 78
            echo "                        <p>";
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "blog.html.twig", 78)->display($context);
            echo "</p>
                    ";
        }
        // line 80
        echo "                    ";
        if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.enabled") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hide_cc_license", array()))) {
            // line 81
            echo "                        <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "blog.html.twig", 81)->display($context);
            echo "</p>
                    ";
        }
        // line 83
        echo "                </div>

                ";
    }

    // line 89
    public function block_sidebar($context, array $blocks = array())
    {
        // line 90
        echo "                        ";
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 90)->display($context);
        // line 91
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 91,  449 => 90,  446 => 89,  440 => 83,  434 => 81,  431 => 80,  425 => 78,  422 => 77,  420 => 76,  416 => 74,  412 => 72,  410 => 71,  407 => 70,  405 => 69,  400 => 66,  386 => 65,  383 => 64,  380 => 63,  377 => 62,  359 => 61,  356 => 59,  342 => 58,  339 => 57,  321 => 56,  318 => 54,  314 => 52,  310 => 50,  308 => 49,  305 => 48,  302 => 47,  298 => 46,  295 => 88,  280 => 46,  135 => 102,  131 => 100,  129 => 99,  122 => 94,  120 => 46,  117 => 45,  114 => 44,  111 => 43,  109 => 42,  104 => 40,  101 => 39,  98 => 38,  94 => 35,  91 => 34,  88 => 33,  84 => 28,  79 => 27,  76 => 26,  69 => 23,  66 => 22,  63 => 21,  59 => 1,  56 => 32,  53 => 18,  50 => 16,  48 => 15,  45 => 13,  42 => 11,  40 => 10,  37 => 8,  34 => 6,  32 => 5,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{# revise checks for Blog list page options - hibbittsdesign.org #}
{% if page.header.show_breadcrumbs is defined %}
    {% set show_breadcrumbs = page.header.show_breadcrumbs %}
{% else %}
    {% set show_breadcrumbs = true %}
{% endif %}
{% if page.header.show_sidebar is defined %}
    {% set show_sidebar = page.header.show_sidebar %}
{% else %}
    {% set show_sidebar = true %}
{% endif %}
{% if page.header.show_pagination is defined %}
    {% set show_pagination = page.header.show_pagination %}
{% else %}
    {% set show_pagination = true %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}

{# check content display flag - hibbittsdesign.org #}
{% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
    {% block hero %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
    {% endblock %}
{% endif %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

            {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}

            {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

            {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            <div class=\"bricklayer\">
                {% else %}
                <div>
                    {% endif %}

                    {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
                    {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                        {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                    {% endfor %}

                    {# display posts without 'featured' tag - hibbittsdesign.org #}
                    {% for child in collection %}
                        {% if \"featured\" not in child.taxonomy['tag'] %}
                            {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                        {% endif %}
                    {% endfor %}

                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

                <div style=\"text-align:center;\">
                    {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
                    {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly')) %}
                        <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
                    {% endif %}
                    {% if theme_var('cc_license.enabled') and (not page.header.hide_cc_license) %}
                        <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
                    {% endif %}
                </div>

                {% endblock %}

                {# check content display flag - hibbittsdesign.org #}
                {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
                    {% block sidebar %}
                        {% include 'partials/sidebar.html.twig' %}
                    {% endblock %}
                {% endif %}
                {% endembed %}
        </section>

    </section>
    <script>
        //Bricklayer
        {% if ((page.header.bricklayer_layout is not defined) or (page.header.bricklayer_layout)) %}
            var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
        {% endif %}
    </script>
{% endblock %}
", "blog.html.twig", "C:\\inetpub\\wwwroot\\grav-skeleton-open-publishing-space-site\\user\\themes\\quark-open-publishing\\templates\\blog.html.twig");
    }
}
