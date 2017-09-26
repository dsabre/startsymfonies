<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3d3c47cb40a2c4ccefe78d8fdeaa398b8e75971be1b59064e9d8e7b9cee61a13 extends Twig_Template
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
        $__internal_817e78e98a2a0e09174edb7ab8cd9bca5501140689dae92a3f5c2b56b1dfaf3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_817e78e98a2a0e09174edb7ab8cd9bca5501140689dae92a3f5c2b56b1dfaf3b->enter($__internal_817e78e98a2a0e09174edb7ab8cd9bca5501140689dae92a3f5c2b56b1dfaf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c036ac92bfebc06c540b0e9056179bdf55cf7a08e2a9a6cff1c89c5f19b8f6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c036ac92bfebc06c540b0e9056179bdf55cf7a08e2a9a6cff1c89c5f19b8f6b9->enter($__internal_c036ac92bfebc06c540b0e9056179bdf55cf7a08e2a9a6cff1c89c5f19b8f6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_817e78e98a2a0e09174edb7ab8cd9bca5501140689dae92a3f5c2b56b1dfaf3b->leave($__internal_817e78e98a2a0e09174edb7ab8cd9bca5501140689dae92a3f5c2b56b1dfaf3b_prof);

        
        $__internal_c036ac92bfebc06c540b0e9056179bdf55cf7a08e2a9a6cff1c89c5f19b8f6b9->leave($__internal_c036ac92bfebc06c540b0e9056179bdf55cf7a08e2a9a6cff1c89c5f19b8f6b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
