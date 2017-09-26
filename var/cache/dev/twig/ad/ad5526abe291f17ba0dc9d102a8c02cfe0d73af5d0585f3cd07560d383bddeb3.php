<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a979395d400e22d50ef680b2077d70795445f94a943fb6e9fe6d9c90d6d797ab extends Twig_Template
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
        $__internal_024999453e6e7f2da648cb0d2df4594204b411bbb73bc83b63a8c81820cc114c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_024999453e6e7f2da648cb0d2df4594204b411bbb73bc83b63a8c81820cc114c->enter($__internal_024999453e6e7f2da648cb0d2df4594204b411bbb73bc83b63a8c81820cc114c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_39eacac44241b0edc16f09516fb3e11409b45e612f5203f7af89473acfb50c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39eacac44241b0edc16f09516fb3e11409b45e612f5203f7af89473acfb50c28->enter($__internal_39eacac44241b0edc16f09516fb3e11409b45e612f5203f7af89473acfb50c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_024999453e6e7f2da648cb0d2df4594204b411bbb73bc83b63a8c81820cc114c->leave($__internal_024999453e6e7f2da648cb0d2df4594204b411bbb73bc83b63a8c81820cc114c_prof);

        
        $__internal_39eacac44241b0edc16f09516fb3e11409b45e612f5203f7af89473acfb50c28->leave($__internal_39eacac44241b0edc16f09516fb3e11409b45e612f5203f7af89473acfb50c28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
