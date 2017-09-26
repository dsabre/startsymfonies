<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_207b7ef03fcc2ad20f6800f9d8566566c59b5353e3cc4511ea2d835d4a0bffba extends Twig_Template
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
        $__internal_d4fc0ee0dd4889deafa7a89d3ca7f1483e198722e0a7b6dfd3a930129065ef7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4fc0ee0dd4889deafa7a89d3ca7f1483e198722e0a7b6dfd3a930129065ef7d->enter($__internal_d4fc0ee0dd4889deafa7a89d3ca7f1483e198722e0a7b6dfd3a930129065ef7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c812020dab27cc9ded6519a152d5bc0ea905684c3379751fa4119bfcbbcf178a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c812020dab27cc9ded6519a152d5bc0ea905684c3379751fa4119bfcbbcf178a->enter($__internal_c812020dab27cc9ded6519a152d5bc0ea905684c3379751fa4119bfcbbcf178a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d4fc0ee0dd4889deafa7a89d3ca7f1483e198722e0a7b6dfd3a930129065ef7d->leave($__internal_d4fc0ee0dd4889deafa7a89d3ca7f1483e198722e0a7b6dfd3a930129065ef7d_prof);

        
        $__internal_c812020dab27cc9ded6519a152d5bc0ea905684c3379751fa4119bfcbbcf178a->leave($__internal_c812020dab27cc9ded6519a152d5bc0ea905684c3379751fa4119bfcbbcf178a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
