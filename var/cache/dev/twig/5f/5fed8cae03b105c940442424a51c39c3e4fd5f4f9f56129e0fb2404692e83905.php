<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_2b672c2c84e269772b29e207fc5accf16e335f13e9f32527afd92dce0d34bca0 extends Twig_Template
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
        $__internal_f2bcd7caa99d22ea9eda59a02b45c03931469c8588bb039eb35085dd9f132cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bcd7caa99d22ea9eda59a02b45c03931469c8588bb039eb35085dd9f132cb5->enter($__internal_f2bcd7caa99d22ea9eda59a02b45c03931469c8588bb039eb35085dd9f132cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_af827f84a2505893aeda9fb3d32466ca1e526763df559c1fb7b625951ea89bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af827f84a2505893aeda9fb3d32466ca1e526763df559c1fb7b625951ea89bc6->enter($__internal_af827f84a2505893aeda9fb3d32466ca1e526763df559c1fb7b625951ea89bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f2bcd7caa99d22ea9eda59a02b45c03931469c8588bb039eb35085dd9f132cb5->leave($__internal_f2bcd7caa99d22ea9eda59a02b45c03931469c8588bb039eb35085dd9f132cb5_prof);

        
        $__internal_af827f84a2505893aeda9fb3d32466ca1e526763df559c1fb7b625951ea89bc6->leave($__internal_af827f84a2505893aeda9fb3d32466ca1e526763df559c1fb7b625951ea89bc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
