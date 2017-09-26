<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_6eacc0aae9acfac5a48013bcc1b1b67ef20e84fbda1fe446bf5e155a5b07145d extends Twig_Template
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
        $__internal_1fdfc37af9babbaedfc34906c75798e4af67fb34f898bd5c7af22adc239f0088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdfc37af9babbaedfc34906c75798e4af67fb34f898bd5c7af22adc239f0088->enter($__internal_1fdfc37af9babbaedfc34906c75798e4af67fb34f898bd5c7af22adc239f0088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d52382450542a84269198b5dc6ad06f0e92ec0f88cfc62ba59f4e9be4df6e26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52382450542a84269198b5dc6ad06f0e92ec0f88cfc62ba59f4e9be4df6e26f->enter($__internal_d52382450542a84269198b5dc6ad06f0e92ec0f88cfc62ba59f4e9be4df6e26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1fdfc37af9babbaedfc34906c75798e4af67fb34f898bd5c7af22adc239f0088->leave($__internal_1fdfc37af9babbaedfc34906c75798e4af67fb34f898bd5c7af22adc239f0088_prof);

        
        $__internal_d52382450542a84269198b5dc6ad06f0e92ec0f88cfc62ba59f4e9be4df6e26f->leave($__internal_d52382450542a84269198b5dc6ad06f0e92ec0f88cfc62ba59f4e9be4df6e26f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
