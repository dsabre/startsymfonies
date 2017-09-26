<?php

/* ::base.html.twig */
class __TwigTemplate_81dd026ed7772ff6aac050569df83d3c94e8dbd62d96fc0760cf01778132669f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/base.html.twig", "::base.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43ec874e13dd94d3dd7b173a5fdb434a0d03f094b69db7f1aa4ed48afe045cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ec874e13dd94d3dd7b173a5fdb434a0d03f094b69db7f1aa4ed48afe045cb0->enter($__internal_43ec874e13dd94d3dd7b173a5fdb434a0d03f094b69db7f1aa4ed48afe045cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_91f9361c3debfe7c8bf8a0aa02731fe02d32b680073cd2c04a4046151451f8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f9361c3debfe7c8bf8a0aa02731fe02d32b680073cd2c04a4046151451f8cb->enter($__internal_91f9361c3debfe7c8bf8a0aa02731fe02d32b680073cd2c04a4046151451f8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43ec874e13dd94d3dd7b173a5fdb434a0d03f094b69db7f1aa4ed48afe045cb0->leave($__internal_43ec874e13dd94d3dd7b173a5fdb434a0d03f094b69db7f1aa4ed48afe045cb0_prof);

        
        $__internal_91f9361c3debfe7c8bf8a0aa02731fe02d32b680073cd2c04a4046151451f8cb->leave($__internal_91f9361c3debfe7c8bf8a0aa02731fe02d32b680073cd2c04a4046151451f8cb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/base.html.twig\" %}", "::base.html.twig", "/home/dsabre/Lavoro/git/startsymfonies2/app/Resources/views/base.html.twig");
    }
}
