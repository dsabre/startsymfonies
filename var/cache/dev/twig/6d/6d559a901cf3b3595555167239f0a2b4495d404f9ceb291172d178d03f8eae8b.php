<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b078ac8f66d1fd1caee51c16b76923fa7f2642c95db443468bafa87bd913e73 extends Twig_Template
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
        $__internal_89ba3705907ab9fd109ddc4fe5e1b9e47344662cbbe4243f3224d5ee45cc4e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ba3705907ab9fd109ddc4fe5e1b9e47344662cbbe4243f3224d5ee45cc4e8b->enter($__internal_89ba3705907ab9fd109ddc4fe5e1b9e47344662cbbe4243f3224d5ee45cc4e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_77832b109486264ceb493e7e4796103f6cbbe76b5b69bea507e0db69b7050dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77832b109486264ceb493e7e4796103f6cbbe76b5b69bea507e0db69b7050dc4->enter($__internal_77832b109486264ceb493e7e4796103f6cbbe76b5b69bea507e0db69b7050dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_89ba3705907ab9fd109ddc4fe5e1b9e47344662cbbe4243f3224d5ee45cc4e8b->leave($__internal_89ba3705907ab9fd109ddc4fe5e1b9e47344662cbbe4243f3224d5ee45cc4e8b_prof);

        
        $__internal_77832b109486264ceb493e7e4796103f6cbbe76b5b69bea507e0db69b7050dc4->leave($__internal_77832b109486264ceb493e7e4796103f6cbbe76b5b69bea507e0db69b7050dc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
