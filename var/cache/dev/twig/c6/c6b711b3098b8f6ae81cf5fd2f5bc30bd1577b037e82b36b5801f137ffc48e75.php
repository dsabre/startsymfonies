<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bb4249dc71239c0410b8b8cee29b4ca713f1cd099a70b93709c74f909653baf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daf4cb2984f62c4db516d7be88851a8a53cc010d0b288b1d9e7d858677a83686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf4cb2984f62c4db516d7be88851a8a53cc010d0b288b1d9e7d858677a83686->enter($__internal_daf4cb2984f62c4db516d7be88851a8a53cc010d0b288b1d9e7d858677a83686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a613a811407f7d227d4543090aa9db7cf3a3981de295c51c4188d8c3a123d4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a613a811407f7d227d4543090aa9db7cf3a3981de295c51c4188d8c3a123d4fb->enter($__internal_a613a811407f7d227d4543090aa9db7cf3a3981de295c51c4188d8c3a123d4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_daf4cb2984f62c4db516d7be88851a8a53cc010d0b288b1d9e7d858677a83686->leave($__internal_daf4cb2984f62c4db516d7be88851a8a53cc010d0b288b1d9e7d858677a83686_prof);

        
        $__internal_a613a811407f7d227d4543090aa9db7cf3a3981de295c51c4188d8c3a123d4fb->leave($__internal_a613a811407f7d227d4543090aa9db7cf3a3981de295c51c4188d8c3a123d4fb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb9114cf51ec1c44a6a9f25678a944798eb73a5326a7fa777aa4c145bca74e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9114cf51ec1c44a6a9f25678a944798eb73a5326a7fa777aa4c145bca74e69->enter($__internal_fb9114cf51ec1c44a6a9f25678a944798eb73a5326a7fa777aa4c145bca74e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c65c23080ef228e25f83a1e8021fc3791d3fa1deea1fc93441a62365a44cf986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65c23080ef228e25f83a1e8021fc3791d3fa1deea1fc93441a62365a44cf986->enter($__internal_c65c23080ef228e25f83a1e8021fc3791d3fa1deea1fc93441a62365a44cf986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c65c23080ef228e25f83a1e8021fc3791d3fa1deea1fc93441a62365a44cf986->leave($__internal_c65c23080ef228e25f83a1e8021fc3791d3fa1deea1fc93441a62365a44cf986_prof);

        
        $__internal_fb9114cf51ec1c44a6a9f25678a944798eb73a5326a7fa777aa4c145bca74e69->leave($__internal_fb9114cf51ec1c44a6a9f25678a944798eb73a5326a7fa777aa4c145bca74e69_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
