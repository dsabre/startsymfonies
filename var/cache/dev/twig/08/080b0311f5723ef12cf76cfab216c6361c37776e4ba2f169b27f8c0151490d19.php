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
        $__internal_c577a5d027f88e3b5a80eb26b9c75bf2f9f04c30606e87996b8e866fa184e0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c577a5d027f88e3b5a80eb26b9c75bf2f9f04c30606e87996b8e866fa184e0c6->enter($__internal_c577a5d027f88e3b5a80eb26b9c75bf2f9f04c30606e87996b8e866fa184e0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0646d2aad7dbf9eb5b4cb259f58450e590b3f5854782dc623d639868d49526dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0646d2aad7dbf9eb5b4cb259f58450e590b3f5854782dc623d639868d49526dc->enter($__internal_0646d2aad7dbf9eb5b4cb259f58450e590b3f5854782dc623d639868d49526dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c577a5d027f88e3b5a80eb26b9c75bf2f9f04c30606e87996b8e866fa184e0c6->leave($__internal_c577a5d027f88e3b5a80eb26b9c75bf2f9f04c30606e87996b8e866fa184e0c6_prof);

        
        $__internal_0646d2aad7dbf9eb5b4cb259f58450e590b3f5854782dc623d639868d49526dc->leave($__internal_0646d2aad7dbf9eb5b4cb259f58450e590b3f5854782dc623d639868d49526dc_prof);

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
