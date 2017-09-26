<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f341398b81a6f42d959041e03d09c0052bd35ef64ee33df207c5d995d3036f76 extends Twig_Template
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
        $__internal_cb456ffd0d3b4cdbee9c21b69f6f5d4facc9d2ecc47ae3a319d5ed2fba280250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb456ffd0d3b4cdbee9c21b69f6f5d4facc9d2ecc47ae3a319d5ed2fba280250->enter($__internal_cb456ffd0d3b4cdbee9c21b69f6f5d4facc9d2ecc47ae3a319d5ed2fba280250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_89a1fe4be9cb0f237edb6aecbcdf82762dcd7a8867feb16fc7779675578460a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a1fe4be9cb0f237edb6aecbcdf82762dcd7a8867feb16fc7779675578460a4->enter($__internal_89a1fe4be9cb0f237edb6aecbcdf82762dcd7a8867feb16fc7779675578460a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_cb456ffd0d3b4cdbee9c21b69f6f5d4facc9d2ecc47ae3a319d5ed2fba280250->leave($__internal_cb456ffd0d3b4cdbee9c21b69f6f5d4facc9d2ecc47ae3a319d5ed2fba280250_prof);

        
        $__internal_89a1fe4be9cb0f237edb6aecbcdf82762dcd7a8867feb16fc7779675578460a4->leave($__internal_89a1fe4be9cb0f237edb6aecbcdf82762dcd7a8867feb16fc7779675578460a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
