<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1c7f2f9e0ead445c50662a935a923e0dbec4afebc3937d2910b7782cfe913323 extends Twig_Template
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
        $__internal_e02a3aceaf5007e16c0ded0962c5b43229d07b5df06b642e5ee70d2cb4edbd85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02a3aceaf5007e16c0ded0962c5b43229d07b5df06b642e5ee70d2cb4edbd85->enter($__internal_e02a3aceaf5007e16c0ded0962c5b43229d07b5df06b642e5ee70d2cb4edbd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_b9b7f80bedb636aa4d58ffb1d15559928b5ecb57737764ad0cd5280293e97f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b7f80bedb636aa4d58ffb1d15559928b5ecb57737764ad0cd5280293e97f8f->enter($__internal_b9b7f80bedb636aa4d58ffb1d15559928b5ecb57737764ad0cd5280293e97f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e02a3aceaf5007e16c0ded0962c5b43229d07b5df06b642e5ee70d2cb4edbd85->leave($__internal_e02a3aceaf5007e16c0ded0962c5b43229d07b5df06b642e5ee70d2cb4edbd85_prof);

        
        $__internal_b9b7f80bedb636aa4d58ffb1d15559928b5ecb57737764ad0cd5280293e97f8f->leave($__internal_b9b7f80bedb636aa4d58ffb1d15559928b5ecb57737764ad0cd5280293e97f8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
