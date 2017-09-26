<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9da11d6220d24485f559c5af8e9ac7f0efd88c63c83dac4dee9820379c40a776 extends Twig_Template
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
        $__internal_599c7c08b61288459f86e3d72821db11b66700dfb3fe1cfd03f89250c65b175b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599c7c08b61288459f86e3d72821db11b66700dfb3fe1cfd03f89250c65b175b->enter($__internal_599c7c08b61288459f86e3d72821db11b66700dfb3fe1cfd03f89250c65b175b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_abff72169b04c85d847c5b5cd81c913251a11284a642660adc12ccbd2030702d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abff72169b04c85d847c5b5cd81c913251a11284a642660adc12ccbd2030702d->enter($__internal_abff72169b04c85d847c5b5cd81c913251a11284a642660adc12ccbd2030702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_599c7c08b61288459f86e3d72821db11b66700dfb3fe1cfd03f89250c65b175b->leave($__internal_599c7c08b61288459f86e3d72821db11b66700dfb3fe1cfd03f89250c65b175b_prof);

        
        $__internal_abff72169b04c85d847c5b5cd81c913251a11284a642660adc12ccbd2030702d->leave($__internal_abff72169b04c85d847c5b5cd81c913251a11284a642660adc12ccbd2030702d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
