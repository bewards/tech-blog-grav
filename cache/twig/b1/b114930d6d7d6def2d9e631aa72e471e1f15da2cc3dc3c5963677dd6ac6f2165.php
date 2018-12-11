<?php

/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_6174f33ea0b9b353e22ae9030b41340e63d45c3b981f52246e707a764040c692 extends Twig_Template
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
        $this->loadTemplate("forms/fields/filepicker/filepicker.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1, "619114309")->display($context);
    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed \"forms/fields/select/select.html.twig\" %}

    {% block input %}
        {% if not field.options and value %}
            {% set field = field|merge({options: {(value): value}}) %}
        {% endif %}
        {{ parent() }}
    {% endblock %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{field.name}}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        data-value=\"{{value}}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
", "forms/fields/filepicker/filepicker.html.twig", "C:\\inetpub\\wwwroot\\grav-skeleton-open-publishing-space-site\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\filepicker\\filepicker.html.twig");
    }
}


/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_6174f33ea0b9b353e22ae9030b41340e63d45c3b981f52246e707a764040c692_619114309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("forms/fields/select/select.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'global_attributes' => array($this, 'block_global_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/select/select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        if (( !$this->getAttribute(($context["field"] ?? null), "options", array()) && ($context["value"] ?? null))) {
            // line 5
            echo "            ";
            $context["field"] = twig_array_merge(($context["field"] ?? null), array("options" => array(($context["value"] ?? null) => ($context["value"] ?? null))));
            // line 6
            echo "        ";
        }
        // line 7
        echo "        ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
    ";
    }

    // line 10
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 11
        echo "        data-grav-filepicker
        data-name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()), "html", null, true);
        echo "\"
        ";
        // line 13
        if ($this->getAttribute(($context["field"] ?? null), "preview_images", array())) {
            echo "data-preview-images";
        }
        // line 14
        echo "        data-value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\"
        ";
        // line 15
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 15,  122 => 14,  118 => 13,  114 => 12,  111 => 11,  108 => 10,  101 => 7,  98 => 6,  95 => 5,  92 => 4,  89 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed \"forms/fields/select/select.html.twig\" %}

    {% block input %}
        {% if not field.options and value %}
            {% set field = field|merge({options: {(value): value}}) %}
        {% endif %}
        {{ parent() }}
    {% endblock %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{field.name}}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        data-value=\"{{value}}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
", "forms/fields/filepicker/filepicker.html.twig", "C:\\inetpub\\wwwroot\\grav-skeleton-open-publishing-space-site\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\filepicker\\filepicker.html.twig");
    }
}
