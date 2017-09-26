<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6210084b57f896b0ee9f8d90a51acc62ba50504a1847f7d5bceca3785bf60921 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1d5e3dd8a4677e6650eed5699e735639851cbff2f1d391a977e8ad089a53ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d5e3dd8a4677e6650eed5699e735639851cbff2f1d391a977e8ad089a53ec7->enter($__internal_c1d5e3dd8a4677e6650eed5699e735639851cbff2f1d391a977e8ad089a53ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e4d681ad4f464ef05fa840015a4dd201207fefefff59cf5b451d72cdc022a473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d681ad4f464ef05fa840015a4dd201207fefefff59cf5b451d72cdc022a473->enter($__internal_e4d681ad4f464ef05fa840015a4dd201207fefefff59cf5b451d72cdc022a473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1d5e3dd8a4677e6650eed5699e735639851cbff2f1d391a977e8ad089a53ec7->leave($__internal_c1d5e3dd8a4677e6650eed5699e735639851cbff2f1d391a977e8ad089a53ec7_prof);

        
        $__internal_e4d681ad4f464ef05fa840015a4dd201207fefefff59cf5b451d72cdc022a473->leave($__internal_e4d681ad4f464ef05fa840015a4dd201207fefefff59cf5b451d72cdc022a473_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_867bf10757b273b3f28a5e7c8e839522147d75e88828ffc24179f9b9043ccd18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867bf10757b273b3f28a5e7c8e839522147d75e88828ffc24179f9b9043ccd18->enter($__internal_867bf10757b273b3f28a5e7c8e839522147d75e88828ffc24179f9b9043ccd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dc43b60a39a56c046baa8c0876e4cbd3ec1fb18e06be67a287dad6490cf1004a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc43b60a39a56c046baa8c0876e4cbd3ec1fb18e06be67a287dad6490cf1004a->enter($__internal_dc43b60a39a56c046baa8c0876e4cbd3ec1fb18e06be67a287dad6490cf1004a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dc43b60a39a56c046baa8c0876e4cbd3ec1fb18e06be67a287dad6490cf1004a->leave($__internal_dc43b60a39a56c046baa8c0876e4cbd3ec1fb18e06be67a287dad6490cf1004a_prof);

        
        $__internal_867bf10757b273b3f28a5e7c8e839522147d75e88828ffc24179f9b9043ccd18->leave($__internal_867bf10757b273b3f28a5e7c8e839522147d75e88828ffc24179f9b9043ccd18_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2b005f317a3e4ed6ef5a3210eb53c8f1440f2080dc8b2d87483e39c9838aeb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b005f317a3e4ed6ef5a3210eb53c8f1440f2080dc8b2d87483e39c9838aeb4->enter($__internal_f2b005f317a3e4ed6ef5a3210eb53c8f1440f2080dc8b2d87483e39c9838aeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ece956ee6c95088f68ff7bd894905c15ec1a866269e2fe9c229d9317e8cbc588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece956ee6c95088f68ff7bd894905c15ec1a866269e2fe9c229d9317e8cbc588->enter($__internal_ece956ee6c95088f68ff7bd894905c15ec1a866269e2fe9c229d9317e8cbc588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ece956ee6c95088f68ff7bd894905c15ec1a866269e2fe9c229d9317e8cbc588->leave($__internal_ece956ee6c95088f68ff7bd894905c15ec1a866269e2fe9c229d9317e8cbc588_prof);

        
        $__internal_f2b005f317a3e4ed6ef5a3210eb53c8f1440f2080dc8b2d87483e39c9838aeb4->leave($__internal_f2b005f317a3e4ed6ef5a3210eb53c8f1440f2080dc8b2d87483e39c9838aeb4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5dad41fb0655cd502e156cca3fef3c624db9b9e13753a54aa64e4f52b359b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5dad41fb0655cd502e156cca3fef3c624db9b9e13753a54aa64e4f52b359b79->enter($__internal_b5dad41fb0655cd502e156cca3fef3c624db9b9e13753a54aa64e4f52b359b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca148522047a81841c5976c793e525a7f926261634fbdd1c6d8984ec5eee04e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca148522047a81841c5976c793e525a7f926261634fbdd1c6d8984ec5eee04e1->enter($__internal_ca148522047a81841c5976c793e525a7f926261634fbdd1c6d8984ec5eee04e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ca148522047a81841c5976c793e525a7f926261634fbdd1c6d8984ec5eee04e1->leave($__internal_ca148522047a81841c5976c793e525a7f926261634fbdd1c6d8984ec5eee04e1_prof);

        
        $__internal_b5dad41fb0655cd502e156cca3fef3c624db9b9e13753a54aa64e4f52b359b79->leave($__internal_b5dad41fb0655cd502e156cca3fef3c624db9b9e13753a54aa64e4f52b359b79_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/dsabre/Lavoro/git/startsymfonies2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
