<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a06e7164368eb0d005de9b00500a9ec1bfbf0d81da7a7c27fe49e8a7b68cb158 extends Twig_Template
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
        $__internal_7f93515fae730e8d6e788c61d84f3d8739c7e2edc698e5dbe77705ed423079c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f93515fae730e8d6e788c61d84f3d8739c7e2edc698e5dbe77705ed423079c9->enter($__internal_7f93515fae730e8d6e788c61d84f3d8739c7e2edc698e5dbe77705ed423079c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ae493f212a9776899832cb979c7dc7ddde822c835326432e0e13e42ab9bbca40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae493f212a9776899832cb979c7dc7ddde822c835326432e0e13e42ab9bbca40->enter($__internal_ae493f212a9776899832cb979c7dc7ddde822c835326432e0e13e42ab9bbca40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7f93515fae730e8d6e788c61d84f3d8739c7e2edc698e5dbe77705ed423079c9->leave($__internal_7f93515fae730e8d6e788c61d84f3d8739c7e2edc698e5dbe77705ed423079c9_prof);

        
        $__internal_ae493f212a9776899832cb979c7dc7ddde822c835326432e0e13e42ab9bbca40->leave($__internal_ae493f212a9776899832cb979c7dc7ddde822c835326432e0e13e42ab9bbca40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
