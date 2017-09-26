<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_904f72b347b2e0b6567378e3d2660436a066a12f97bb8927c5077708092dc48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65ad2730b8d52f7fdd9014c876b4b32d1ba444d23a08f0048680e97da0171fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ad2730b8d52f7fdd9014c876b4b32d1ba444d23a08f0048680e97da0171fe6->enter($__internal_65ad2730b8d52f7fdd9014c876b4b32d1ba444d23a08f0048680e97da0171fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_dd2a7cf6eaf58d489b7f1bba23cc298e29eb20fba0ffab2e1eea7ba09909160b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2a7cf6eaf58d489b7f1bba23cc298e29eb20fba0ffab2e1eea7ba09909160b->enter($__internal_dd2a7cf6eaf58d489b7f1bba23cc298e29eb20fba0ffab2e1eea7ba09909160b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65ad2730b8d52f7fdd9014c876b4b32d1ba444d23a08f0048680e97da0171fe6->leave($__internal_65ad2730b8d52f7fdd9014c876b4b32d1ba444d23a08f0048680e97da0171fe6_prof);

        
        $__internal_dd2a7cf6eaf58d489b7f1bba23cc298e29eb20fba0ffab2e1eea7ba09909160b->leave($__internal_dd2a7cf6eaf58d489b7f1bba23cc298e29eb20fba0ffab2e1eea7ba09909160b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_275c0afe1243b69d033981e05febf4d64ed4fa94e1b75a58177ba87035b8659d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275c0afe1243b69d033981e05febf4d64ed4fa94e1b75a58177ba87035b8659d->enter($__internal_275c0afe1243b69d033981e05febf4d64ed4fa94e1b75a58177ba87035b8659d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f357bba93c310ebef712b2aed810b4bcb71d9dbbb6b4056c04c898a3dbda963c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f357bba93c310ebef712b2aed810b4bcb71d9dbbb6b4056c04c898a3dbda963c->enter($__internal_f357bba93c310ebef712b2aed810b4bcb71d9dbbb6b4056c04c898a3dbda963c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f357bba93c310ebef712b2aed810b4bcb71d9dbbb6b4056c04c898a3dbda963c->leave($__internal_f357bba93c310ebef712b2aed810b4bcb71d9dbbb6b4056c04c898a3dbda963c_prof);

        
        $__internal_275c0afe1243b69d033981e05febf4d64ed4fa94e1b75a58177ba87035b8659d->leave($__internal_275c0afe1243b69d033981e05febf4d64ed4fa94e1b75a58177ba87035b8659d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_000116582804d91dab323e65d12db52c23160a684fdbeebebafc70df7ce650b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000116582804d91dab323e65d12db52c23160a684fdbeebebafc70df7ce650b3->enter($__internal_000116582804d91dab323e65d12db52c23160a684fdbeebebafc70df7ce650b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c0e40061b782a5f61efd323abc4870030655eeb769991067f45602732e2e246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0e40061b782a5f61efd323abc4870030655eeb769991067f45602732e2e246->enter($__internal_4c0e40061b782a5f61efd323abc4870030655eeb769991067f45602732e2e246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_4c0e40061b782a5f61efd323abc4870030655eeb769991067f45602732e2e246->leave($__internal_4c0e40061b782a5f61efd323abc4870030655eeb769991067f45602732e2e246_prof);

        
        $__internal_000116582804d91dab323e65d12db52c23160a684fdbeebebafc70df7ce650b3->leave($__internal_000116582804d91dab323e65d12db52c23160a684fdbeebebafc70df7ce650b3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
