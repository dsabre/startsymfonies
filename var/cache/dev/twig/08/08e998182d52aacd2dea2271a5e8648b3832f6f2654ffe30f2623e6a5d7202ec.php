<?php

/* @App/templates/flashes.js.twig */
class __TwigTemplate_7ef8a895e792a02ba10094deadf07a33ed112996222a463eede0ddb16c979511 extends Twig_Template
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
        $__internal_80fc31a562cc895beac6f85c722da66a2ecb578870506b296cef28c8b82a3127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80fc31a562cc895beac6f85c722da66a2ecb578870506b296cef28c8b82a3127->enter($__internal_80fc31a562cc895beac6f85c722da66a2ecb578870506b296cef28c8b82a3127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/templates/flashes.js.twig"));

        $__internal_9465d1a975133ec4ccc0989cdd4407b27817efd0735eb99aaef7bbd5d88f43ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9465d1a975133ec4ccc0989cdd4407b27817efd0735eb99aaef7bbd5d88f43ef->enter($__internal_9465d1a975133ec4ccc0989cdd4407b27817efd0735eb99aaef7bbd5d88f43ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/templates/flashes.js.twig"));

        // line 2
        echo "
";
        // line 3
        $context["flashes"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array());
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["k"] => $context["message"]) {
                // line 6
                echo "\t\t";
                $context["messages"] = $this->env->getExtension('AppBundle\Twig\Extension\Utils')->arrayReplace($context["messages"], $context["k"], $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "admin"));
                // line 7
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "
\t";
            // line 9
            $context["flashes"] = twig_array_merge((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")), array($context["type"] => $context["messages"]));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
\$(function(){
\ttoastr.options = {
\t\t\"closeButton\"       : false,
\t\t\"debug\"             : false,
\t\t\"newestOnTop\"       : false,
\t\t\"progressBar\"       : false,
\t\t\"positionClass\"     : \"toast-top-right\",
\t\t\"preventDuplicates\" : false,
\t\t\"onclick\"           : null,
\t\t\"showDuration\"      : \"300\",
\t\t\"hideDuration\"      : \"1000\",
\t\t\"timeOut\"           : \"5000\",
\t\t\"extendedTimeOut\"   : \"1000\",
\t\t\"showEasing\"        : \"swing\",
\t\t\"hideEasing\"        : \"linear\",
\t\t\"showMethod\"        : \"fadeIn\",
\t\t\"hideMethod\"        : \"fadeOut\"
\t};

\tconst flashes = JSON.parse('";
        // line 31
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes"))), "js", null, true);
        echo "');

\t\$.each(flashes, function(type, messages){
\t\t\$.each(messages, function(k, message){
\t\t\ttoastr[type](message);
\t\t});
\t});
});";
        
        $__internal_80fc31a562cc895beac6f85c722da66a2ecb578870506b296cef28c8b82a3127->leave($__internal_80fc31a562cc895beac6f85c722da66a2ecb578870506b296cef28c8b82a3127_prof);

        
        $__internal_9465d1a975133ec4ccc0989cdd4407b27817efd0735eb99aaef7bbd5d88f43ef->leave($__internal_9465d1a975133ec4ccc0989cdd4407b27817efd0735eb99aaef7bbd5d88f43ef_prof);

    }

    public function getTemplateName()
    {
        return "@App/templates/flashes.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  57 => 11,  51 => 9,  48 => 8,  42 => 7,  39 => 6,  34 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'admin' %}

{% set flashes = app.session.flashBag.all %}
{% for type, messages in flashes %}
\t{% for k, message in messages %}
\t\t{% set messages = messages|array_replace(k, message|trans) %}
\t{% endfor %}

\t{% set flashes = flashes|merge({(type): messages}) %}
{% endfor %}

\$(function(){
\ttoastr.options = {
\t\t\"closeButton\"       : false,
\t\t\"debug\"             : false,
\t\t\"newestOnTop\"       : false,
\t\t\"progressBar\"       : false,
\t\t\"positionClass\"     : \"toast-top-right\",
\t\t\"preventDuplicates\" : false,
\t\t\"onclick\"           : null,
\t\t\"showDuration\"      : \"300\",
\t\t\"hideDuration\"      : \"1000\",
\t\t\"timeOut\"           : \"5000\",
\t\t\"extendedTimeOut\"   : \"1000\",
\t\t\"showEasing\"        : \"swing\",
\t\t\"hideEasing\"        : \"linear\",
\t\t\"showMethod\"        : \"fadeIn\",
\t\t\"hideMethod\"        : \"fadeOut\"
\t};

\tconst flashes = JSON.parse('{{ flashes|json_encode }}');

\t\$.each(flashes, function(type, messages){
\t\t\$.each(messages, function(k, message){
\t\t\ttoastr[type](message);
\t\t});
\t});
});", "@App/templates/flashes.js.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/src/AppBundle/Resources/views/templates/flashes.js.twig");
    }
}
