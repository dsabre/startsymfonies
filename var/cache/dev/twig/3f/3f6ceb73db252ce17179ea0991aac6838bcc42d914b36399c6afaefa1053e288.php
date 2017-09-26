<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e4355484f57b3dee029e3bad8e495b78644825105a5cf98ea3a4a261fb105bc1 extends Twig_Template
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
        $__internal_f5261455f376d17941e34438e62079bdf90ebd03e97c5e3449abfd09df091c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5261455f376d17941e34438e62079bdf90ebd03e97c5e3449abfd09df091c3a->enter($__internal_f5261455f376d17941e34438e62079bdf90ebd03e97c5e3449abfd09df091c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_17d4de2efd38114ffaf3e789f96838a6e89995fa79fa7db0ca74c0b908f8a356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d4de2efd38114ffaf3e789f96838a6e89995fa79fa7db0ca74c0b908f8a356->enter($__internal_17d4de2efd38114ffaf3e789f96838a6e89995fa79fa7db0ca74c0b908f8a356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f5261455f376d17941e34438e62079bdf90ebd03e97c5e3449abfd09df091c3a->leave($__internal_f5261455f376d17941e34438e62079bdf90ebd03e97c5e3449abfd09df091c3a_prof);

        
        $__internal_17d4de2efd38114ffaf3e789f96838a6e89995fa79fa7db0ca74c0b908f8a356->leave($__internal_17d4de2efd38114ffaf3e789f96838a6e89995fa79fa7db0ca74c0b908f8a356_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
