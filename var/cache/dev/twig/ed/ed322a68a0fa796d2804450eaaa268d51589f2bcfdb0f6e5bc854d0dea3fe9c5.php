<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_81f4f9786c986438eed02a815145f5888175182f7f378b27aa524f263d7b89f9 extends Twig_Template
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
        $__internal_73f62a8c12599b6119bd33e133d111676f7b79f586800f118a9a4ffcb87783ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f62a8c12599b6119bd33e133d111676f7b79f586800f118a9a4ffcb87783ee->enter($__internal_73f62a8c12599b6119bd33e133d111676f7b79f586800f118a9a4ffcb87783ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ec781eda914dd4c9fb8211efdc0a1f1e54c9e89fab403825e87bbba62779b86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec781eda914dd4c9fb8211efdc0a1f1e54c9e89fab403825e87bbba62779b86a->enter($__internal_ec781eda914dd4c9fb8211efdc0a1f1e54c9e89fab403825e87bbba62779b86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_73f62a8c12599b6119bd33e133d111676f7b79f586800f118a9a4ffcb87783ee->leave($__internal_73f62a8c12599b6119bd33e133d111676f7b79f586800f118a9a4ffcb87783ee_prof);

        
        $__internal_ec781eda914dd4c9fb8211efdc0a1f1e54c9e89fab403825e87bbba62779b86a->leave($__internal_ec781eda914dd4c9fb8211efdc0a1f1e54c9e89fab403825e87bbba62779b86a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
