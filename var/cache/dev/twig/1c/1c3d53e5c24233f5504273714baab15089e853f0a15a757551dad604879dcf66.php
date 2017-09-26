<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_75b97afc0416473d409ca87d7318fbfeed3913d650dd654d7e834b6feb312b07 extends Twig_Template
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
        $__internal_f91c000f26e572b479065f5c9e47b5064aa040ff18988f04815cd12a1e9914cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91c000f26e572b479065f5c9e47b5064aa040ff18988f04815cd12a1e9914cb->enter($__internal_f91c000f26e572b479065f5c9e47b5064aa040ff18988f04815cd12a1e9914cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_722b67fe5e19561266068b81f22d08fefb5cfe0f120f38dd556c087bed52da1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722b67fe5e19561266068b81f22d08fefb5cfe0f120f38dd556c087bed52da1c->enter($__internal_722b67fe5e19561266068b81f22d08fefb5cfe0f120f38dd556c087bed52da1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f91c000f26e572b479065f5c9e47b5064aa040ff18988f04815cd12a1e9914cb->leave($__internal_f91c000f26e572b479065f5c9e47b5064aa040ff18988f04815cd12a1e9914cb_prof);

        
        $__internal_722b67fe5e19561266068b81f22d08fefb5cfe0f120f38dd556c087bed52da1c->leave($__internal_722b67fe5e19561266068b81f22d08fefb5cfe0f120f38dd556c087bed52da1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
