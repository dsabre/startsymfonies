<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_254b71d3523bf48812995d91efefb98a94312dedbaf0a707778dbe123baf4c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254b71d3523bf48812995d91efefb98a94312dedbaf0a707778dbe123baf4c04->enter($__internal_254b71d3523bf48812995d91efefb98a94312dedbaf0a707778dbe123baf4c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2a47b0f1b2195b777f719065dc54b12bc937fe0affbcc6072d39160a6ecae4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a47b0f1b2195b777f719065dc54b12bc937fe0affbcc6072d39160a6ecae4c7->enter($__internal_2a47b0f1b2195b777f719065dc54b12bc937fe0affbcc6072d39160a6ecae4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254b71d3523bf48812995d91efefb98a94312dedbaf0a707778dbe123baf4c04->leave($__internal_254b71d3523bf48812995d91efefb98a94312dedbaf0a707778dbe123baf4c04_prof);

        
        $__internal_2a47b0f1b2195b777f719065dc54b12bc937fe0affbcc6072d39160a6ecae4c7->leave($__internal_2a47b0f1b2195b777f719065dc54b12bc937fe0affbcc6072d39160a6ecae4c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e92c144fcb9378aec008dcc54e08f16ecf583c17e3e0dd2384c9b35c423d9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e92c144fcb9378aec008dcc54e08f16ecf583c17e3e0dd2384c9b35c423d9ce->enter($__internal_5e92c144fcb9378aec008dcc54e08f16ecf583c17e3e0dd2384c9b35c423d9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_87e00ea01fdb72a55b2ffe02b99d61660ca1b6b21a51625f78e9f2fdbdab0d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e00ea01fdb72a55b2ffe02b99d61660ca1b6b21a51625f78e9f2fdbdab0d5e->enter($__internal_87e00ea01fdb72a55b2ffe02b99d61660ca1b6b21a51625f78e9f2fdbdab0d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_87e00ea01fdb72a55b2ffe02b99d61660ca1b6b21a51625f78e9f2fdbdab0d5e->leave($__internal_87e00ea01fdb72a55b2ffe02b99d61660ca1b6b21a51625f78e9f2fdbdab0d5e_prof);

        
        $__internal_5e92c144fcb9378aec008dcc54e08f16ecf583c17e3e0dd2384c9b35c423d9ce->leave($__internal_5e92c144fcb9378aec008dcc54e08f16ecf583c17e3e0dd2384c9b35c423d9ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_666f788150126eb87e47f0cbc633b6fb6caea15199ff9426a61c368c2d8f2714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666f788150126eb87e47f0cbc633b6fb6caea15199ff9426a61c368c2d8f2714->enter($__internal_666f788150126eb87e47f0cbc633b6fb6caea15199ff9426a61c368c2d8f2714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2aa9bb1e692a4fa7c19103898087843ec6ffd8cd7785ccb8b0c9063d96763437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa9bb1e692a4fa7c19103898087843ec6ffd8cd7785ccb8b0c9063d96763437->enter($__internal_2aa9bb1e692a4fa7c19103898087843ec6ffd8cd7785ccb8b0c9063d96763437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2aa9bb1e692a4fa7c19103898087843ec6ffd8cd7785ccb8b0c9063d96763437->leave($__internal_2aa9bb1e692a4fa7c19103898087843ec6ffd8cd7785ccb8b0c9063d96763437_prof);

        
        $__internal_666f788150126eb87e47f0cbc633b6fb6caea15199ff9426a61c368c2d8f2714->leave($__internal_666f788150126eb87e47f0cbc633b6fb6caea15199ff9426a61c368c2d8f2714_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8e10ed4157ae3f4a7ba81d651a0c1cefaf7979c44d05a68e9cfc3cd93a564fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e10ed4157ae3f4a7ba81d651a0c1cefaf7979c44d05a68e9cfc3cd93a564fa->enter($__internal_f8e10ed4157ae3f4a7ba81d651a0c1cefaf7979c44d05a68e9cfc3cd93a564fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3be42cc915ed2d62ec31ea34a8a0954c87d07a906e789bb7bd2a4513aaf6ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3be42cc915ed2d62ec31ea34a8a0954c87d07a906e789bb7bd2a4513aaf6ae0->enter($__internal_e3be42cc915ed2d62ec31ea34a8a0954c87d07a906e789bb7bd2a4513aaf6ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e3be42cc915ed2d62ec31ea34a8a0954c87d07a906e789bb7bd2a4513aaf6ae0->leave($__internal_e3be42cc915ed2d62ec31ea34a8a0954c87d07a906e789bb7bd2a4513aaf6ae0_prof);

        
        $__internal_f8e10ed4157ae3f4a7ba81d651a0c1cefaf7979c44d05a68e9cfc3cd93a564fa->leave($__internal_f8e10ed4157ae3f4a7ba81d651a0c1cefaf7979c44d05a68e9cfc3cd93a564fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
