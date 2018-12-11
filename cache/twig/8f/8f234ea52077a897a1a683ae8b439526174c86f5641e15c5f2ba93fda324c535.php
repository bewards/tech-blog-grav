<?php

/* partials/git_sync_repo_link.html.twig */
class __TwigTemplate_6b303ef27294461d5a9929c25f8d82404413c84ecb6b10d79c3c7580e27cf6a8 extends Twig_Template
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
        // line 2
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link")) {
            // line 3
            echo "    ";
            if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hide_git_sync_repo_link", array())) {
                // line 4
                echo "        ";
                $context["git_repo_link_url"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link");
                // line 5
                echo "        ";
                if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                    // line 6
                    echo "            ";
                    if (twig_in_filter("github", ($context["git_repo_link_url"] ?? null))) {
                        // line 7
                        echo "                ";
                        $context["git_repo_link_icon"] = "github";
                        // line 8
                        echo "            ";
                    } elseif (twig_in_filter("gitlab", ($context["git_repo_link_url"] ?? null))) {
                        // line 9
                        echo "                ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 10
                        echo "            ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_repo_link_url"] ?? null))) {
                        // line 11
                        echo "                ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 12
                        echo "            ";
                    } else {
                        // line 13
                        echo "                ";
                        $context["git_repo_link_icon"] = "git";
                        // line 14
                        echo "            ";
                    }
                    // line 15
                    echo "        ";
                } else {
                    // line 16
                    echo "            ";
                    $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "        ";
                if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                    // line 19
                    echo "            ";
                    if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                        // line 20
                        echo "                ";
                        $context["git_repo_link_text"] = "View Content Repository";
                        // line 21
                        echo "            ";
                    } else {
                        // line 22
                        echo "                ";
                        $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                        // line 23
                        echo "            ";
                    }
                    // line 24
                    echo "            <a class=\"newwindow external-link\" href=\"";
                    echo ($context["git_repo_link_url"] ?? null);
                    echo "\" title=\"";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "\" target=\"_blank\">
                <i class=\"fa fa-";
                    // line 25
                    echo ($context["git_repo_link_icon"] ?? null);
                    echo "\" aria-hidden=\"true\"></i>
                ";
                    // line 26
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "
            </a>
        ";
                } else {
                    // line 29
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "git_sync_repo_link", array())) {
                        // line 30
                        echo "                ";
                        $context["git_repo_link_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "git_sync_repo_link", array());
                        // line 31
                        echo "            ";
                    } else {
                        // line 32
                        echo "                ";
                        $context["git_repo_link_url"] = (($context["git_repo_link_url"] ?? null) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", array())), array("/user/" => "/")));
                        // line 33
                        echo "            ";
                    }
                    // line 34
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "count", array())) {
                        // line 35
                        echo "                ";
                        $context["git_repo_link_url"] = twig_replace_filter(($context["git_repo_link_url"] ?? null), array((("/" . $this->getAttribute(($context["page"] ?? null), "template", array())) . ".md") => "/"));
                        // line 36
                        echo "            ";
                    }
                    // line 37
                    echo "            ";
                    if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                        // line 38
                        echo "                ";
                        $context["git_repo_link_text"] = "Edit this Page";
                        // line 39
                        echo "            ";
                    } else {
                        // line 40
                        echo "                ";
                        $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                        // line 41
                        echo "            ";
                    }
                    // line 42
                    echo "            <a class=\"newwindow external-link\" href=\"";
                    echo ($context["git_repo_link_url"] ?? null);
                    echo "\" title=\"";
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "\" target=\"_blank\">
                <i class=\"fa fa-";
                    // line 43
                    echo ($context["git_repo_link_icon"] ?? null);
                    echo "\" aria-hidden=\"true\"></i>
                ";
                    // line 44
                    echo ($context["git_repo_link_text"] ?? null);
                    echo "
            </a>
        ";
                }
                // line 47
                echo "    ";
            }
        } else {
            // line 49
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "git-sync", array(), "array"), "enabled", array()) && twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "git-sync", array(), "array"), "repository", array())))) {
                // line 50
                echo "        ";
                $context["admin_panel_appearance_url"] = ($this->getAttribute(($context["grav"] ?? null), "base_url", array()) . "/admin/plugins/git-sync");
                // line 51
                echo "        <a class=\"newwindow external-link\" href=\"";
                echo ($context["admin_panel_appearance_url"] ?? null);
                echo "\" title=\"Setup Git Sync\">
            <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
            Setup Git Sync
        </a>
    ";
            } else {
                // line 56
                echo "        ";
                if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hide_git_sync_repo_link", array())) {
                    // line 57
                    echo "            ";
                    $context["git_sync_repo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "git-sync", array(), "array"), "repository", array());
                    // line 58
                    echo "            ";
                    $context["git_sync_repo_link"] = twig_replace_filter(($context["git_sync_repo"] ?? null), array(".git" => "/"));
                    // line 59
                    echo "            ";
                    if (twig_in_filter("github", ($context["git_sync_repo_link"] ?? null))) {
                        // line 60
                        echo "                ";
                        $context["git_repo_link_icon"] = "github";
                        // line 61
                        echo "                ";
                        $context["git_repo_edit_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), array(".git" => "/")) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", array()), array("user/" => "/")));
                        // line 62
                        echo "            ";
                    } elseif (twig_in_filter("gitlab", ($context["git_sync_repo_link"] ?? null))) {
                        // line 63
                        echo "                ";
                        $context["git_repo_link_icon"] = "gitlab";
                        // line 64
                        echo "                ";
                        $context["git_repo_edit_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), array(".git" => "/")) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", array()), array("user/" => "/")));
                        // line 65
                        echo "            ";
                    } elseif (twig_in_filter("bitbucket", ($context["git_sync_repo_link"] ?? null))) {
                        // line 66
                        echo "                ";
                        $context["git_repo_link_icon"] = "bitbucket";
                        // line 67
                        echo "                ";
                        $context["git_repo_edit_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), array(".git" => "/")) . "src/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", array()), array("user/" => "/")));
                        // line 68
                        echo "            ";
                    } else {
                        // line 69
                        echo "                ";
                        $context["git_repo_link_icon"] = "git";
                        // line 70
                        echo "                ";
                        $context["git_repo_edit_link_url"] = ((twig_replace_filter(($context["git_sync_repo"] ?? null), array(".git" => "/")) . "blob/master") . twig_replace_filter($this->getAttribute(($context["page"] ?? null), "filePathClean", array()), array("user/" => "/")));
                        // line 71
                        echo "            ";
                    }
                    // line 72
                    echo "            ";
                    if ( !twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon"))) {
                        // line 73
                        echo "                ";
                        $context["git_repo_link_icon"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_icon");
                        // line 74
                        echo "            ";
                    }
                    // line 75
                    echo "            ";
                    if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link") == "view") || twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("type_of_git_sync_repo_link")))) {
                        // line 76
                        echo "                ";
                        if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_repo_link_text"))) {
                            // line 77
                            echo "                    ";
                            $context["git_repo_link_text"] = "View Content Repository";
                            // line 78
                            echo "                ";
                        } else {
                            // line 79
                            echo "                    ";
                            $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                            // line 80
                            echo "                ";
                        }
                        // line 81
                        echo "                <a class=\"newwindow external-link\" href=\"";
                        echo ($context["git_sync_repo_link"] ?? null);
                        echo "\" title=\"";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "\" target=\"_blank\">
                    <i class=\"fa fa-";
                        // line 82
                        echo ($context["git_repo_link_icon"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>
                    ";
                        // line 83
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "
                </a>
            ";
                    } else {
                        // line 86
                        echo "                ";
                        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "count", array())) {
                            // line 87
                            echo "                    ";
                            $context["git_repo_edit_link_url"] = twig_replace_filter(($context["git_repo_edit_link_url"] ?? null), array((("/" . $this->getAttribute(                            // line 88
($context["page"] ?? null), "template", array())) . ".md") => "/"));
                            // line 90
                            echo "                ";
                        }
                        // line 91
                        echo "                ";
                        if (twig_test_empty($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text"))) {
                            // line 92
                            echo "                    ";
                            $context["git_repo_link_text"] = "Edit this Page";
                            // line 93
                            echo "                ";
                        } else {
                            // line 94
                            echo "                    ";
                            $context["git_repo_link_text"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_git_sync_repo_link_text");
                            // line 95
                            echo "                ";
                        }
                        // line 96
                        echo "                <a class=\"newwindow external-link\" href=\"";
                        echo ($context["git_repo_edit_link_url"] ?? null);
                        echo "\" title=\"";
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "\" target=\"_blank\">
                    <i class=\"fa fa-";
                        // line 97
                        echo ($context["git_repo_link_icon"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>
                    ";
                        // line 98
                        echo ($context["git_repo_link_text"] ?? null);
                        echo "
                </a>
            ";
                    }
                    // line 101
                    echo "        ";
                }
                // line 102
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/git_sync_repo_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 102,  310 => 101,  304 => 98,  300 => 97,  293 => 96,  290 => 95,  287 => 94,  284 => 93,  281 => 92,  278 => 91,  275 => 90,  273 => 88,  271 => 87,  268 => 86,  262 => 83,  258 => 82,  251 => 81,  248 => 80,  245 => 79,  242 => 78,  239 => 77,  236 => 76,  233 => 75,  230 => 74,  227 => 73,  224 => 72,  221 => 71,  218 => 70,  215 => 69,  212 => 68,  209 => 67,  206 => 66,  203 => 65,  200 => 64,  197 => 63,  194 => 62,  191 => 61,  188 => 60,  185 => 59,  182 => 58,  179 => 57,  176 => 56,  167 => 51,  164 => 50,  161 => 49,  157 => 47,  151 => 44,  147 => 43,  140 => 42,  137 => 41,  134 => 40,  131 => 39,  128 => 38,  125 => 37,  122 => 36,  119 => 35,  116 => 34,  113 => 33,  110 => 32,  107 => 31,  104 => 30,  101 => 29,  95 => 26,  91 => 25,  84 => 24,  81 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 6,  27 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# new twig template file - hibbittsdesign.org #}
{% if theme_var('git_sync_repo_link') %}
    {% if not page.header.hide_git_sync_repo_link %}
        {% set git_repo_link_url = theme_var('git_sync_repo_link') %}
        {% if theme_var('custom_git_sync_repo_link_icon')is empty %}
            {% if 'github' in git_repo_link_url %}
                {% set git_repo_link_icon = \"github\" %}
            {% elseif 'gitlab' in git_repo_link_url %}
                {% set git_repo_link_icon = \"gitlab\" %}
            {% elseif 'bitbucket' in git_repo_link_url %}
                {% set git_repo_link_icon = \"bitbucket\" %}
            {% else %}
                {% set git_repo_link_icon = \"git\" %}
            {% endif %}
        {% else %}
            {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
        {% endif %}
        {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link')is empty %}
            {% if theme_var('custom_git_sync_repo_link_text')is empty %}
                {% set git_repo_link_text = 'View Content Repository' %}
            {% else %}
                {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% endif %}
            <a class=\"newwindow external-link\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
                <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>
                {{ git_repo_link_text }}
            </a>
        {% else %}
            {% if page.header.git_sync_repo_link %}
                {% set git_repo_link_url = page.header.git_sync_repo_link %}
            {% else %}
                {% set git_repo_link_url = git_repo_link_url ~ ('/' ~ page.filePathClean) | replace({'/user/': '/'}) %}
            {% endif %}
            {% if page.children.count %}
                {% set git_repo_link_url = (git_repo_link_url | replace({('/' ~ page.template ~ '.md'): '/'})) %}
            {% endif %}
            {% if theme_var('custom_git_sync_repo_link_text')is empty %}
                {% set git_repo_link_text = 'Edit this Page' %}
            {% else %}
                {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
            {% endif %}
            <a class=\"newwindow external-link\" href=\"{{ git_repo_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
                <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>
                {{ git_repo_link_text }}
            </a>
        {% endif %}
    {% endif %}
{% else %}
    {% if config.plugins['git-sync'].enabled and config.plugins['git-sync'].repository is empty %}
        {% set admin_panel_appearance_url = grav.base_url ~ '/admin/plugins/git-sync' %}
        <a class=\"newwindow external-link\" href=\"{{ admin_panel_appearance_url }}\" title=\"Setup Git Sync\">
            <i class=\"fa fa-cog\" aria-hidden=\"true\"></i>
            Setup Git Sync
        </a>
    {% else %}
        {% if not page.header.hide_git_sync_repo_link %}
            {% set git_sync_repo = config.plugins['git-sync'].repository %}
            {% set git_sync_repo_link = (git_sync_repo | replace({'.git': '/'})) %}
            {% if 'github' in git_sync_repo_link %}
                {% set git_repo_link_icon = \"github\" %}
                {% set git_repo_edit_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
            {% elseif 'gitlab' in git_sync_repo_link %}
                {% set git_repo_link_icon = \"gitlab\" %}
                {% set git_repo_edit_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
            {% elseif 'bitbucket' in git_sync_repo_link %}
                {% set git_repo_link_icon = \"bitbucket\" %}
                {% set git_repo_edit_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'src/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
            {% else %}
                {% set git_repo_link_icon = \"git\" %}
                {% set git_repo_edit_link_url = (git_sync_repo | replace({'.git': '/'})) ~ 'blob/master' ~ (page.filePathClean) | replace({'user/': '/'}) %}
            {% endif %}
            {% if theme_var('custom_git_sync_repo_link_icon')is not empty %}
                {% set git_repo_link_icon = theme_var('custom_git_sync_repo_link_icon') %}
            {% endif %}
            {% if theme_var('type_of_git_sync_repo_link') == 'view' or theme_var('type_of_git_sync_repo_link')is empty %}
                {% if theme_var('git_sync_repo_link_text')is empty %}
                    {% set git_repo_link_text = 'View Content Repository' %}
                {% else %}
                    {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
                {% endif %}
                <a class=\"newwindow external-link\" href=\"{{ git_sync_repo_link }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
                    <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>
                    {{ git_repo_link_text }}
                </a>
            {% else %}
                {% if page.children.count %}
                    {% set git_repo_edit_link_url = (git_repo_edit_link_url | replace({
                        ('/' ~ page.template ~ '.md'): '/'
                    })) %}
                {% endif %}
                {% if theme_var('custom_git_sync_repo_link_text')is empty %}
                    {% set git_repo_link_text = 'Edit this Page' %}
                {% else %}
                    {% set git_repo_link_text = theme_var('custom_git_sync_repo_link_text') %}
                {% endif %}
                <a class=\"newwindow external-link\" href=\"{{ git_repo_edit_link_url }}\" title=\"{{ git_repo_link_text }}\" target=\"_blank\">
                    <i class=\"fa fa-{{ git_repo_link_icon }}\" aria-hidden=\"true\"></i>
                    {{ git_repo_link_text }}
                </a>
            {% endif %}
        {% endif %}
    {% endif %}
{% endif %}
", "partials/git_sync_repo_link.html.twig", "C:\\inetpub\\wwwroot\\grav-skeleton-open-publishing-space-site\\user\\themes\\quark-open-publishing\\templates\\partials\\git_sync_repo_link.html.twig");
    }
}
