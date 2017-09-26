<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8e5c82b447fdff23566d6eec0a9b1097112907d973983c6cb81700fa55772fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_563bd35b05eb9778e62e7fe8a354e56ad8135227640c26ae551ee427f98655aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563bd35b05eb9778e62e7fe8a354e56ad8135227640c26ae551ee427f98655aa->enter($__internal_563bd35b05eb9778e62e7fe8a354e56ad8135227640c26ae551ee427f98655aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_afd218338086ad9b49b008e86482fb1830aa4a724de3e42fb411821ecccce9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd218338086ad9b49b008e86482fb1830aa4a724de3e42fb411821ecccce9e5->enter($__internal_afd218338086ad9b49b008e86482fb1830aa4a724de3e42fb411821ecccce9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_563bd35b05eb9778e62e7fe8a354e56ad8135227640c26ae551ee427f98655aa->leave($__internal_563bd35b05eb9778e62e7fe8a354e56ad8135227640c26ae551ee427f98655aa_prof);

        
        $__internal_afd218338086ad9b49b008e86482fb1830aa4a724de3e42fb411821ecccce9e5->leave($__internal_afd218338086ad9b49b008e86482fb1830aa4a724de3e42fb411821ecccce9e5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8bde01c065750e449b953dba07d04a2c265022a6ebe3fe6108187616ef070409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bde01c065750e449b953dba07d04a2c265022a6ebe3fe6108187616ef070409->enter($__internal_8bde01c065750e449b953dba07d04a2c265022a6ebe3fe6108187616ef070409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d2b425f1784ff62da8ffc4dfd32ff5ecadc499ac4b253c9bc6d8a944ed810dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b425f1784ff62da8ffc4dfd32ff5ecadc499ac4b253c9bc6d8a944ed810dd2->enter($__internal_d2b425f1784ff62da8ffc4dfd32ff5ecadc499ac4b253c9bc6d8a944ed810dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_d2b425f1784ff62da8ffc4dfd32ff5ecadc499ac4b253c9bc6d8a944ed810dd2->leave($__internal_d2b425f1784ff62da8ffc4dfd32ff5ecadc499ac4b253c9bc6d8a944ed810dd2_prof);

        
        $__internal_8bde01c065750e449b953dba07d04a2c265022a6ebe3fe6108187616ef070409->leave($__internal_8bde01c065750e449b953dba07d04a2c265022a6ebe3fe6108187616ef070409_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd8aa721c88938d90b0a480ff0e0722c2c9ec7bbb35ab024f00dc326e4133532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8aa721c88938d90b0a480ff0e0722c2c9ec7bbb35ab024f00dc326e4133532->enter($__internal_fd8aa721c88938d90b0a480ff0e0722c2c9ec7bbb35ab024f00dc326e4133532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f01e3b268e65b88f01ac3467128b9630b8b7f7cd079f80051d9c892d61bd6d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01e3b268e65b88f01ac3467128b9630b8b7f7cd079f80051d9c892d61bd6d8e->enter($__internal_f01e3b268e65b88f01ac3467128b9630b8b7f7cd079f80051d9c892d61bd6d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f01e3b268e65b88f01ac3467128b9630b8b7f7cd079f80051d9c892d61bd6d8e->leave($__internal_f01e3b268e65b88f01ac3467128b9630b8b7f7cd079f80051d9c892d61bd6d8e_prof);

        
        $__internal_fd8aa721c88938d90b0a480ff0e0722c2c9ec7bbb35ab024f00dc326e4133532->leave($__internal_fd8aa721c88938d90b0a480ff0e0722c2c9ec7bbb35ab024f00dc326e4133532_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
