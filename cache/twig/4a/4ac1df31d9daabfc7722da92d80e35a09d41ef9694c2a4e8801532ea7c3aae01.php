<?php

/* partials/navigation.html.twig */
class __TwigTemplate_6108475cd35d4b1edf01d8f307316136d56efbf0b5e8661f320732c79660a943 extends Twig_Template
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
        $context["hide_home_menu_link"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("hidehomemenulink");
        // line 2
        echo "
";
        // line 33
        echo "
<ul ";
        // line 34
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 35
        echo $this->getAttribute($this, "nav_loop", array(0 => ($context["pages"] ?? null), 1 => ($context["hide_home_menu_link"] ?? null), 2 => ($context["home_alias"] ?? null)), "method");
        echo "
    ";
        // line 37
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("displaycustommenus.enabled")) {
            // line 38
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("menu"));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 39
                echo "            <li>
                <a href=\"";
                // line 40
                echo $this->getAttribute($context["mitem"], "url", array());
                echo "\" target=\"";
                echo $this->getAttribute($context["mitem"], "target", array());
                echo "\">
                    ";
                // line 41
                if ($this->getAttribute($context["mitem"], "icon", array())) {
                    // line 42
                    echo "                        <i class=\"fa fa-";
                    echo $this->getAttribute($context["mitem"], "icon", array());
                    echo "\"></i>
                    ";
                }
                // line 44
                echo "                    ";
                echo $this->getAttribute($context["mitem"], "text", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        // line 50
        echo "    ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "menu") || ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == ($context["empty"] ?? null)))) {
            // line 51
            echo "        <li>";
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/navigation.html.twig", 51)->display($context);
            echo "</li>
    ";
        }
        // line 53
        echo "</ul>
";
    }

    // line 3
    public function getnav_loop($__page__ = null, $__hide_home_menu_link__ = null, $__home_alias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "hide_home_menu_link" => $__hide_home_menu_link__,
            "home_alias" => $__home_alias__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 5
                echo "        ";
                // line 6
                echo "        ";
                if ( !(($context["hide_home_menu_link"] ?? null) && $this->getAttribute($context["p"], "home", array()))) {
                    // line 7
                    echo "            ";
                    $context["active_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                    // line 8
                    echo "            ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                        // line 9
                        echo "                <li>
                    <a href=\"";
                        // line 10
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\" class=\"";
                        echo ($context["active_page"] ?? null);
                        echo "\">
                        ";
                        // line 11
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                            // line 12
                            echo "                            <i class=\"fa fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                            echo "\"></i>
                        ";
                        }
                        // line 14
                        echo "                        ";
                        echo $this->getAttribute($context["p"], "menu", array());
                        echo "
                    </a>
                    <ul>
                        ";
                        // line 17
                        echo $this->getAttribute($this, "nav_loop", array(0 => $context["p"]), "method");
                        echo "
                    </ul>
                </li>
            ";
                    } else {
                        // line 21
                        echo "                <li>
                    <a href=\"";
                        // line 22
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\" class=\"";
                        echo ($context["active_page"] ?? null);
                        echo "\">
                        ";
                        // line 23
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                            // line 24
                            echo "                            <i class=\"fa fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                            echo "\"></i>
                        ";
                        }
                        // line 26
                        echo "                        ";
                        echo $this->getAttribute($context["p"], "menu", array());
                        echo "
                    </a>
                </li>
            ";
                    }
                    // line 30
                    echo "        ";
                }
                // line 31
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 31,  176 => 30,  168 => 26,  162 => 24,  160 => 23,  154 => 22,  151 => 21,  144 => 17,  137 => 14,  131 => 12,  129 => 11,  123 => 10,  120 => 9,  117 => 8,  114 => 7,  111 => 6,  109 => 5,  104 => 4,  90 => 3,  85 => 53,  79 => 51,  76 => 50,  74 => 49,  71 => 48,  60 => 44,  54 => 42,  52 => 41,  46 => 40,  43 => 39,  38 => 38,  35 => 37,  31 => 35,  27 => 34,  24 => 33,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set hide_home_menu_link = theme_var('hidehomemenulink') %}

{% macro nav_loop(page, hide_home_menu_link, home_alias) %}
    {% for p in page.children.visible %}
        {# Supress home menu link - hibbittsdesign.org #}
        {% if not((hide_home_menu_link) and p.home) %}
            {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
            {% if p.children.visible.count > 0 %}
                <li>
                    <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                        {% if p.header.icon %}
                            <i class=\"fa fa-{{ p.header.icon }}\"></i>
                        {% endif %}
                        {{ p.menu }}
                    </a>
                    <ul>
                        {{ _self.nav_loop(p) }}
                    </ul>
                </li>
            {% else %}
                <li>
                    <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                        {% if p.header.icon %}
                            <i class=\"fa fa-{{ p.header.icon }}\"></i>
                        {% endif %}
                        {{ p.menu }}
                    </a>
                </li>
            {% endif %}
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ _self.nav_loop(pages, hide_home_menu_link, home_alias ) }}
    {# custom menu items check and display - hibbittsdesign.org #}
    {% if theme_var('displaycustommenus.enabled') %}
        {% for mitem in theme_var('menu') %}
            <li>
                <a href=\"{{ mitem.url }}\" target=\"{{ mitem.target }}\">
                    {% if mitem.icon %}
                        <i class=\"fa fa-{{ mitem.icon }}\"></i>
                    {% endif %}
                    {{ mitem.text }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {# check to display git sync link in menu - hibbittsdesign.org #}
    {% if theme_var('display_of_git_sync_repo_link') == 'menu' or theme_var('display_of_git_sync_repo_link') == empty %}
        <li>{% include 'partials/git_sync_repo_link.html.twig' %}</li>
    {% endif %}
</ul>
", "partials/navigation.html.twig", "C:\\inetpub\\wwwroot\\grav-skeleton-open-publishing-space-site\\user\\themes\\quark-open-publishing\\templates\\partials\\navigation.html.twig");
    }
}
