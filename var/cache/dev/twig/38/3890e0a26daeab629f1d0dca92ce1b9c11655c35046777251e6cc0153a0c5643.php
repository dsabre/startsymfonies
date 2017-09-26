<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e827bb8971dc3d4b214c13959c84b1fbe4c8f72214a0f4839affa378c6f137bf extends Twig_Template
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
        $__internal_fc569b507c60cfe15a9b732d9d94a05c7495cfbe4ea0863babf6d73f44789186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc569b507c60cfe15a9b732d9d94a05c7495cfbe4ea0863babf6d73f44789186->enter($__internal_fc569b507c60cfe15a9b732d9d94a05c7495cfbe4ea0863babf6d73f44789186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_19111ad7a2ee8888ced4de808d831007f7979813d8b8a66e52ee6c532ded21fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19111ad7a2ee8888ced4de808d831007f7979813d8b8a66e52ee6c532ded21fd->enter($__internal_19111ad7a2ee8888ced4de808d831007f7979813d8b8a66e52ee6c532ded21fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fc569b507c60cfe15a9b732d9d94a05c7495cfbe4ea0863babf6d73f44789186->leave($__internal_fc569b507c60cfe15a9b732d9d94a05c7495cfbe4ea0863babf6d73f44789186_prof);

        
        $__internal_19111ad7a2ee8888ced4de808d831007f7979813d8b8a66e52ee6c532ded21fd->leave($__internal_19111ad7a2ee8888ced4de808d831007f7979813d8b8a66e52ee6c532ded21fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
