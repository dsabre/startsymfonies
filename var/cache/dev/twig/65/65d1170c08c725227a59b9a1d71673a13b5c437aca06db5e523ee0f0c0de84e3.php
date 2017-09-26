<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a38f80ac789318263153178e8a60d4613ba3c619534a120cb147077e3c00d17c extends Twig_Template
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
        $__internal_f8f7bd82c80c7346930a4c4ceb81d4488928c82e78fba1456732f448663127ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f7bd82c80c7346930a4c4ceb81d4488928c82e78fba1456732f448663127ca->enter($__internal_f8f7bd82c80c7346930a4c4ceb81d4488928c82e78fba1456732f448663127ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_99be6ac3103e8bf9101fe02bc2df683fe0270df0688d9a3b3b13683c9a74d325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99be6ac3103e8bf9101fe02bc2df683fe0270df0688d9a3b3b13683c9a74d325->enter($__internal_99be6ac3103e8bf9101fe02bc2df683fe0270df0688d9a3b3b13683c9a74d325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8f7bd82c80c7346930a4c4ceb81d4488928c82e78fba1456732f448663127ca->leave($__internal_f8f7bd82c80c7346930a4c4ceb81d4488928c82e78fba1456732f448663127ca_prof);

        
        $__internal_99be6ac3103e8bf9101fe02bc2df683fe0270df0688d9a3b3b13683c9a74d325->leave($__internal_99be6ac3103e8bf9101fe02bc2df683fe0270df0688d9a3b3b13683c9a74d325_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_475c4a82f245600d33e282c6d17b6daa1b90b700da2083bb5617c1e5206effc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475c4a82f245600d33e282c6d17b6daa1b90b700da2083bb5617c1e5206effc8->enter($__internal_475c4a82f245600d33e282c6d17b6daa1b90b700da2083bb5617c1e5206effc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9a59f6da23ae05a068e92449433769ecd3bf72e8b0f4759a09341bc005af36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a59f6da23ae05a068e92449433769ecd3bf72e8b0f4759a09341bc005af36d->enter($__internal_c9a59f6da23ae05a068e92449433769ecd3bf72e8b0f4759a09341bc005af36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9a59f6da23ae05a068e92449433769ecd3bf72e8b0f4759a09341bc005af36d->leave($__internal_c9a59f6da23ae05a068e92449433769ecd3bf72e8b0f4759a09341bc005af36d_prof);

        
        $__internal_475c4a82f245600d33e282c6d17b6daa1b90b700da2083bb5617c1e5206effc8->leave($__internal_475c4a82f245600d33e282c6d17b6daa1b90b700da2083bb5617c1e5206effc8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a70fd0dc5797cd63929911e959c0f45e275ce2606016791f84a6dc3843133d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a70fd0dc5797cd63929911e959c0f45e275ce2606016791f84a6dc3843133d5->enter($__internal_7a70fd0dc5797cd63929911e959c0f45e275ce2606016791f84a6dc3843133d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d7efe3eb90f8a5c51bd70acd5efe68501eb78dc70b476b5a761511be41e97508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7efe3eb90f8a5c51bd70acd5efe68501eb78dc70b476b5a761511be41e97508->enter($__internal_d7efe3eb90f8a5c51bd70acd5efe68501eb78dc70b476b5a761511be41e97508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7efe3eb90f8a5c51bd70acd5efe68501eb78dc70b476b5a761511be41e97508->leave($__internal_d7efe3eb90f8a5c51bd70acd5efe68501eb78dc70b476b5a761511be41e97508_prof);

        
        $__internal_7a70fd0dc5797cd63929911e959c0f45e275ce2606016791f84a6dc3843133d5->leave($__internal_7a70fd0dc5797cd63929911e959c0f45e275ce2606016791f84a6dc3843133d5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecba965f7dffaa5d9820d3a99103e4e05d01e1015cd9857b60f8ac6b465ce4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecba965f7dffaa5d9820d3a99103e4e05d01e1015cd9857b60f8ac6b465ce4aa->enter($__internal_ecba965f7dffaa5d9820d3a99103e4e05d01e1015cd9857b60f8ac6b465ce4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9dc382bc1e657400f412c5046331b20ce88ee9eb3f86bed3070b6fd4780c2ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc382bc1e657400f412c5046331b20ce88ee9eb3f86bed3070b6fd4780c2ad2->enter($__internal_9dc382bc1e657400f412c5046331b20ce88ee9eb3f86bed3070b6fd4780c2ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9dc382bc1e657400f412c5046331b20ce88ee9eb3f86bed3070b6fd4780c2ad2->leave($__internal_9dc382bc1e657400f412c5046331b20ce88ee9eb3f86bed3070b6fd4780c2ad2_prof);

        
        $__internal_ecba965f7dffaa5d9820d3a99103e4e05d01e1015cd9857b60f8ac6b465ce4aa->leave($__internal_ecba965f7dffaa5d9820d3a99103e4e05d01e1015cd9857b60f8ac6b465ce4aa_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/dsabre/Lavoro/git/startsymfonies2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
