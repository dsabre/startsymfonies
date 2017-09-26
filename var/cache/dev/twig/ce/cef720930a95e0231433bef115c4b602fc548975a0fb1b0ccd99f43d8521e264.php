<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9cbbab7f9cf89fcd3b1eaf46719abe5916175b74d9498e75a3dcdc20bfde2155 extends Twig_Template
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
        $__internal_3fee7dc584def4a8175beb55d9c730db84b30d92917d4f2c880f6aebcf2c4771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fee7dc584def4a8175beb55d9c730db84b30d92917d4f2c880f6aebcf2c4771->enter($__internal_3fee7dc584def4a8175beb55d9c730db84b30d92917d4f2c880f6aebcf2c4771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_70300ef95514625c98351e2e319f8c8c62a6d27980c69b9cc84bf5b6914773ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70300ef95514625c98351e2e319f8c8c62a6d27980c69b9cc84bf5b6914773ee->enter($__internal_70300ef95514625c98351e2e319f8c8c62a6d27980c69b9cc84bf5b6914773ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3fee7dc584def4a8175beb55d9c730db84b30d92917d4f2c880f6aebcf2c4771->leave($__internal_3fee7dc584def4a8175beb55d9c730db84b30d92917d4f2c880f6aebcf2c4771_prof);

        
        $__internal_70300ef95514625c98351e2e319f8c8c62a6d27980c69b9cc84bf5b6914773ee->leave($__internal_70300ef95514625c98351e2e319f8c8c62a6d27980c69b9cc84bf5b6914773ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
