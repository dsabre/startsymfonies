<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a894e203d64fc4f5781b4c7b71d89f1c4bae555e03d7135df0961babe42e81dd extends Twig_Template
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
        $__internal_7e8e059dc07dae023d592f97f2458301c69a74a0390e80313794830f4aefa6ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8e059dc07dae023d592f97f2458301c69a74a0390e80313794830f4aefa6ae->enter($__internal_7e8e059dc07dae023d592f97f2458301c69a74a0390e80313794830f4aefa6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_26e7ded41227d394bcc4b766c895162e2465fa18d3d7770e07b52a92bb425bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e7ded41227d394bcc4b766c895162e2465fa18d3d7770e07b52a92bb425bdd->enter($__internal_26e7ded41227d394bcc4b766c895162e2465fa18d3d7770e07b52a92bb425bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7e8e059dc07dae023d592f97f2458301c69a74a0390e80313794830f4aefa6ae->leave($__internal_7e8e059dc07dae023d592f97f2458301c69a74a0390e80313794830f4aefa6ae_prof);

        
        $__internal_26e7ded41227d394bcc4b766c895162e2465fa18d3d7770e07b52a92bb425bdd->leave($__internal_26e7ded41227d394bcc4b766c895162e2465fa18d3d7770e07b52a92bb425bdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
