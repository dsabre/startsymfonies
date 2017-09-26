<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bc60ea48b13c97cbbeb0280361a6dc6e96eab789aa0443210735211f3d44679a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39e1c446d7dc7d530486d929ebd4db34253d8c5195bb4f7c58fc365d60ba5803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e1c446d7dc7d530486d929ebd4db34253d8c5195bb4f7c58fc365d60ba5803->enter($__internal_39e1c446d7dc7d530486d929ebd4db34253d8c5195bb4f7c58fc365d60ba5803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_851c88cc9473befe60b48d0d36eef2f4fda67f14db1af182efcd662e3f15b2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851c88cc9473befe60b48d0d36eef2f4fda67f14db1af182efcd662e3f15b2d9->enter($__internal_851c88cc9473befe60b48d0d36eef2f4fda67f14db1af182efcd662e3f15b2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e1c446d7dc7d530486d929ebd4db34253d8c5195bb4f7c58fc365d60ba5803->leave($__internal_39e1c446d7dc7d530486d929ebd4db34253d8c5195bb4f7c58fc365d60ba5803_prof);

        
        $__internal_851c88cc9473befe60b48d0d36eef2f4fda67f14db1af182efcd662e3f15b2d9->leave($__internal_851c88cc9473befe60b48d0d36eef2f4fda67f14db1af182efcd662e3f15b2d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4dad00b07b7daa5999c5fface52117112f5b687ef0de2d36f695a9e0af9fc3d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dad00b07b7daa5999c5fface52117112f5b687ef0de2d36f695a9e0af9fc3d3->enter($__internal_4dad00b07b7daa5999c5fface52117112f5b687ef0de2d36f695a9e0af9fc3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6e7db58e76bbc61e107416015a151893168d6479308e6ebc2a528eb2d153d683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7db58e76bbc61e107416015a151893168d6479308e6ebc2a528eb2d153d683->enter($__internal_6e7db58e76bbc61e107416015a151893168d6479308e6ebc2a528eb2d153d683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6e7db58e76bbc61e107416015a151893168d6479308e6ebc2a528eb2d153d683->leave($__internal_6e7db58e76bbc61e107416015a151893168d6479308e6ebc2a528eb2d153d683_prof);

        
        $__internal_4dad00b07b7daa5999c5fface52117112f5b687ef0de2d36f695a9e0af9fc3d3->leave($__internal_4dad00b07b7daa5999c5fface52117112f5b687ef0de2d36f695a9e0af9fc3d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/dsabre/Lavoro/git/startsymfonies2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
