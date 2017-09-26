<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b7441d40556439ae44c86cf370b3fb71b670e2902210fe00f869841f173cba88 extends Twig_Template
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
        $__internal_349036ed9567b5cda6a9d575f914fe352a3811a43e61c78ba3e52602fb37365e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349036ed9567b5cda6a9d575f914fe352a3811a43e61c78ba3e52602fb37365e->enter($__internal_349036ed9567b5cda6a9d575f914fe352a3811a43e61c78ba3e52602fb37365e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_10bad2b1be0996c7e5a1c74c5270b81bede57a48c289589827d365cd7d82eb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bad2b1be0996c7e5a1c74c5270b81bede57a48c289589827d365cd7d82eb16->enter($__internal_10bad2b1be0996c7e5a1c74c5270b81bede57a48c289589827d365cd7d82eb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_349036ed9567b5cda6a9d575f914fe352a3811a43e61c78ba3e52602fb37365e->leave($__internal_349036ed9567b5cda6a9d575f914fe352a3811a43e61c78ba3e52602fb37365e_prof);

        
        $__internal_10bad2b1be0996c7e5a1c74c5270b81bede57a48c289589827d365cd7d82eb16->leave($__internal_10bad2b1be0996c7e5a1c74c5270b81bede57a48c289589827d365cd7d82eb16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
