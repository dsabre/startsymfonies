<?php

/* ::base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
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
        $__internal_f4cd5487ca410aeccbfec8cfb920a3198c3ff1ccd3a18425f587367052010c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4cd5487ca410aeccbfec8cfb920a3198c3ff1ccd3a18425f587367052010c46->enter($__internal_f4cd5487ca410aeccbfec8cfb920a3198c3ff1ccd3a18425f587367052010c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_444ce3ba8ec3844cbaa0ff02eaaef4eff1f43427405a20e666d67f8c43395863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444ce3ba8ec3844cbaa0ff02eaaef4eff1f43427405a20e666d67f8c43395863->enter($__internal_444ce3ba8ec3844cbaa0ff02eaaef4eff1f43427405a20e666d67f8c43395863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4cd5487ca410aeccbfec8cfb920a3198c3ff1ccd3a18425f587367052010c46->leave($__internal_f4cd5487ca410aeccbfec8cfb920a3198c3ff1ccd3a18425f587367052010c46_prof);

        
        $__internal_444ce3ba8ec3844cbaa0ff02eaaef4eff1f43427405a20e666d67f8c43395863->leave($__internal_444ce3ba8ec3844cbaa0ff02eaaef4eff1f43427405a20e666d67f8c43395863_prof);

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
        return new Twig_Source("{% extends \"@App/base.html.twig\" %}", "::base.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/app/Resources/views/base.html.twig");
    }
}
